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
        $pageTitle = "Ecies.co.UK  ";
        return View::make('admin.data_table', compact('pageTitle'));
    }



    /*
     *
     * Store Process for all type POST
     *
     */
    public function store_post(){
        if($this->isPostRequest()){
            $input_data = Input::all(); // input all data
            $image = $input_data['image']; // $image variable
            $model = Input::get('id') ? Post::find(Input::get('id')) : new Post(); // call model

            //set data
            $model->type = $input_data['type'];
            $model->title = $input_data['title'];
            $model->description = $input_data['description'];
            $model->status = $input_data['status'];

            // Image save
            if (Input::hasFile('image')){
                // Images destination
                $img_dir = "images/".$input_data['type']."/";
                $img_thumb_dir = $img_dir."thumb/";

                $filename = $image->getClientOriginalName();
                $pathL = public_path($img_dir.$filename);
                $pathS = public_path($img_thumb_dir.$filename);
                Image::make($image->getRealPath())->resize(900, 600)->save($pathL);
                Image::make($image->getRealPath())->resize(60, 60)->save($pathS);

                $model->image = "images/".$input_data['type']."/".$filename;
                $model->thumb = "images/".$input_data['type']."/thumb/".$filename;
            }

            //save data into
            if($model->validate($input_data)) {
                DB::beginTransaction();
                try {
                    $model->save();
                    DB::commit();
                    Session::flash('message', 'Success !');
                }catch (Exception $e) {
                    //If there are any exceptions, rollback the transaction`
                    DB::rollback();
                    Session::flash('danger', 'Failed !');
                }
            }
        }else{
            Session::flash('danger', 'Invalid Request !');
        }
        return Redirect::back();
    }



    /*
     *
     * Store Process for all type POST
     *
     */
    public function store_course(){
        if($this->isPostRequest()){
            $input_data = Input::all(); // input all data
            $model = Input::get('id') ? Course::find(Input::get('id')) : new Course(); // call model

            //set data
            $model->type = $input_data['type'];
            $model->title = $input_data['title'];
            $model->code = $input_data['code'];
            $model->length = $input_data['length'];
            $model->attend = $input_data['attend'];
            $model->information = $input_data['information'];
            $model->information_link = $input_data['information_link'];
            $model->contact = $input_data['contact'];
            $model->contact_link = $input_data['contact_link'];
            $model->status = $input_data['status'];

            //save data into
            if($model->validate($input_data)) {
                DB::beginTransaction();
                try {
                    $model->save();
                    DB::commit();
                    Session::flash('message', 'Success !');
                }catch (Exception $e) {
                    //If there are any exceptions, rollback the transaction`
                    DB::rollback();
                    Session::flash('danger', 'Failed !');
                }
            }
        }else{
            Session::flash('danger', 'Invalid Request !');
        }
        return Redirect::back();
    }

    /*
     *
     * ICT SUPPORT
     *
     */

    public function ict_support(){
        $pageTitle = "ICT Support  ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'ict-support')->latest('id')->get();
        return View::make('admin.post.ict_support', compact('data','pageTitle', 'post_type'));
    }

    public function index_post($type){
        $pageTitle = Str::title($type);
        $post_type = Post::post_type();
        $data = Post::where('type', $type)->latest('id')->get();
        return View::make('admin.post.ict_support', compact('data','pageTitle', 'post_type'));
    }


    public function view_post($type, $id){
        $data = Post::where('type', $type)->where('id', $id)->first();
        return View::make('admin.post.show', compact('data'));
    }

    public function edit_post($type, $id){
        $pageTitle = " Edit Post";
        $post_type = Post::post_type();
        $model = Post::find($id);
        return View::make('admin.post.edit', compact('model','pageTitle', 'post_type'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy_post($id)
    {
        // delete
        $employee = Post::find($id);
        $employee->delete();
        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::back();
    }



    //Solution - Security
    public function security(){
        $pageTitle = "Security  ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'security')->latest('id')->get();
        return View::make('admin.post.index', compact('data','pageTitle', 'post_type'));
    }

    //Solution - Consultancy
    public function consultancy(){
        $pageTitle = "Consultancy  ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'consultancy')->latest('id')->get();
        return View::make('admin.post.index', compact('data','pageTitle', 'post_type'));
    }


    //Solution - Web Design
    public function web_design(){
        $pageTitle = "Web Design ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'web-design')->latest('id')->get();
        return View::make('admin.post.index', compact('data','pageTitle', 'post_type'));
    }


    // COURSE
    public function view_course($type, $id){
        $data = Course::where('type', $type)->where('id', $id)->first();
        return View::make('admin.course.show', compact('data'));
    }

    public function edit_course($type, $id){
        $pageTitle = " Edit Course";
        $course_type = Course::course_type();
        $model = Course::find($id);
        return View::make('admin.course.edit', compact('model','pageTitle', 'course_type'));
    }
    public function destroy_course($id)
    {
        $model = Course::find($id);
        $model->delete();
        Session::flash('message', 'Successfully deleted!');
        return Redirect::back();
    }

    //Course - Communication IT
    public function communication_it(){
        $pageTitle = "Communication IT  ";
        $course_type = Course::course_type();
        $data = Course::where('type', 'communication-it')->latest('id')->get();
        return View::make('admin.course.index', compact('data','pageTitle', 'course_type'));
    }

    //Course - English Language
    public function english_language(){
        $pageTitle = "English Language  ";
        $course_type = Course::course_type();
        $data = Course::where('type', 'english-language')->latest('id')->get();
        return View::make('admin.course.index', compact('data','pageTitle', 'course_type'));
    }


    //Client - Service
    public function service(){
        $pageTitle = "Service ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'client-service')->latest('id')->get();
        return View::make('admin.post.index', compact('data','pageTitle', 'post_type'));
    }


    //Client - Student
    public function student(){
        $pageTitle = "Student  ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'client-student')->latest('id')->get();
        return View::make('admin.post.index', compact('data','pageTitle', 'post_type'));
    }

    //ecies - overview
    public function overview(){
        $pageTitle = "About Ecies  ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'ecies-overview')->latest('id')->get();
        return View::make('admin.post.index', compact('data','pageTitle', 'post_type'));
    }

    //ecies - partner
    public function partner(){
        $pageTitle = "Ecies Partner  ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'ecies-partner')->latest('id')->get();
        return View::make('admin.post.index', compact('data','pageTitle', 'post_type'));
    }

    //ecies - career
    public function career(){
        $pageTitle = "Career  ";
        $post_type = Post::post_type();
        $data = Post::where('type', 'ecies-career')->latest('id')->get();
        return View::make('admin.post.index', compact('data','pageTitle', 'post_type'));
    }





    /*
     *
     * RECENT WORK
     *
     */

    // Recent Work
    public function index_recent_work(){
        $pageTitle = "Recent Work";
        $data = RecentWork::latest('id')->get();
        return View::make('admin.recent_work.index', compact('data','pageTitle'));
    }

    public function store_recent_work(){
        if($this->isPostRequest()){
            $input_data = Input::all(); // input all data
            $image = $input_data['image']; // $image variable
            $model = Input::get('id') ? RecentWork::find(Input::get('id')) : new RecentWork(); // call model

            //set data
            $model->title = $input_data['title'];
            $model->short_description = $input_data['short_description'];
            $model->long_description = $input_data['long_description'];
            $model->status = $input_data['status'];

            // Image save
            if (Input::hasFile('image')){
                // Images destination
                $img_dir = "images/recent-work/";
                #$img_thumb_dir = $img_dir."thumb/";

                $filename = $image->getClientOriginalName();
                $pathL = public_path($img_dir.$filename);
                #$pathS = public_path($img_thumb_dir.$filename);
                Image::make($image->getRealPath())->resize(900, 600)->save($pathL);
                #Image::make($image->getRealPath())->resize(60, 60)->save($pathS);

                $model->image = "images/recent-work/".$filename;
                #$model->thumb = "images/".$input_data['type']."/thumb/".$filename;
            }

            //save data into
            if($model->validate($input_data)) {
                DB::beginTransaction();
                try {
                    $model->save();
                    DB::commit();
                    Session::flash('message', 'Success !');
                }catch (Exception $e) {
                    //If there are any exceptions, rollback the transaction`
                    DB::rollback();
                    Session::flash('danger', 'Failed !');
                }
            }
        }else{
            Session::flash('danger', 'Invalid Request !');
        }
        return Redirect::back();
    }

    public function view_recent_work($id){
        $data = RecentWork::where('id', $id)->first();
        return View::make('admin.recent_work.show', compact('data'));
    }

    public function edit_recent_work($id){
        $pageTitle = " Edit Recent Work";
        $model = RecentWork::find($id);
        return View::make('admin.recent_work.edit', compact('model','pageTitle'));
    }
    public function destroy_recent_work($id)
    {
        $model = RecentWork::find($id);
        $model->delete();
        Session::flash('message', 'Successfully deleted!');
        return Redirect::back();
    }





    /*
     *
     * Registration
     *
     */

    // Registration
    public function index_registration(){
        $pageTitle = "Registration History";
        $data = Registration::latest('id')->get();
        return View::make('admin.registration.index', compact('data','pageTitle'));
    }

    public function view_registration($id){
        $data = Registration::where('id', $id)->first();
        return View::make('admin.registration.show', compact('data'));
    }




}
