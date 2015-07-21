<?php

class AdminController extends \BaseController {

    function __construct() {
        $this->beforeFilter('userAuth', array('except' => array('login')));
    }

    protected function isPostRequest()
    {
        return Input::server("REQUEST_METHOD") == "POST";
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
        if ($this->isPostRequest()) {
            $validator = $this->getLoginValidator();
            if ($validator->passes()) {
                $credentials = $this->getLoginCredentials();
                if (Auth::attempt($credentials)) {
                    Session::put('user_id', Auth::user()->id);
                    Session::put('username', Auth::user()->username);
                    Session::put('email', Auth::user()->email);
                    Session::put('first_name', Auth::user()->first_name);
                    Session::put('last_name', Auth::user()->last_name);
                    $this->userLastVisit(Auth::user()->id);

                    Session::flash('message', 'Successfully Logged In !');

                    return Redirect::to("admin/dashboard");
                }else{
                  return Redirect::to("user/dashboard");
                }
                return Redirect::back()->withErrors([
                    "password" => ["Username / Password invalid."]
                ]);
            }else{
                return Redirect::back()->withInput()->withErrors($validator);
            }
        }else{
            if(Auth::check()){
                return Redirect::to("user/dashboard");
            }
            $pageTitle = "Login  | Ecies | excellence in the training & consultancy services in UK ";
            return View::make('admin.login', compact('pageTitle'));
        }
	}

    //Last Visitor
    protected function userLastVisit($user_id){
        $model = User::findOrFail($user_id);
        date_default_timezone_set("Asia/Dacca");
        $date = date('Y-m-d H:i:s', time());
        $model->last_visit = $date;
        $model->ip_address = getHostByName(getHostName());
        $model->save();
    }

    protected function getLoginValidator()
    {
        return Validator::make(Input::all(), [
            "username" => "required",
            "password" => "required"
        ]);
    }

    protected function getLoginCredentials()
    {
        return [
            "username" => Input::get("username"),
            "password" => Input::get("password")
        ];
    }

    public function logout() {
        Auth::logout();
        Session::flush(); //delete the session
        return Redirect::to('admin/login');
    }

    public function dashboard(){
        $pageTitle = "Dashboard  | Ecies.co.UK  ";
        return View::make('admin.data_table', compact('pageTitle'));
    }



    /*
     *
     * ICT SUPPORT
     *
     */

    public function ict_support(){
        if($this->isPostRequest()){
            $input_data = Input::all();
            print_r($input_data);exit;
            $model = new Post();
            if($model->validate($input_data)) {
                DB::beginTransaction();
                try {
                    $model->create($input_data);
                    DB::commit();
                    Session::flash('message', 'Success !');
                }catch (Exception $e) {
                    //If there are any exceptions, rollback the transaction`
                    DB::rollback();
                    Session::flash('danger', 'Failed !');
                }
            }
            return Redirect::back();
        }else{
            $pageTitle = "ICT Support | Dashboard | Ecies.co.UK ";
            $post_type = Post::post_type();
            $data = Post::where('type', 'ict-support')->latest('id')->get();
            return View::make('admin.post.ict_support', compact('data','pageTitle', 'post_type'));
        }
    }

}
