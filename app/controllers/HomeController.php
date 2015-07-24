<?php

class HomeController extends BaseController {

    protected function isPostRequest()
    {
        return Input::server("REQUEST_METHOD") == "POST";
    }

    // Home Page
    public function index() {
        /*$data_security = Post::where('type', 'security')->latest('id')->first();
        $data_consultancy = Post::where('type', 'consultancy')->latest('id')->first();
        $data_ict_workshop = Post::where('type', 'ict-workshop')->latest('id')->first();
        print_r($data_ict_workshop);exit;*/
        $pageTitle = "Ecies | excellence in the training & consultancy services in UK ";
        return View::make('pages.index', compact(
            'pageTitle'
        ));
    }

    // Solution / ICT Support
    public function ict_support() {
        $pageTitle = "ICT Support | excellence in the training & consultancy services in UK ";
        return View::make('pages.ict_support', compact('pageTitle'));
    }

    // Solution / Security
    public function security() {
        $pageTitle = "Security | excellence in the training & consultancy services in UK ";
        return View::make('pages.solution_security', compact('pageTitle'));
    }

    // Solution / Consultancy
    public function consultancy() {
        $pageTitle = "Consultancy | excellence in the training & consultancy services in UK ";
        return View::make('pages.solution_consultancy', compact('pageTitle'));
    }

    public function web_design() {
        $pageTitle = "Web Design | excellence in the training & consultancy services in UK ";
        return View::make('pages.web_design', compact('pageTitle'));
    }

    //Course / Communication IT
    public function communication_it() {
        $pageTitle = "Communication IT | excellence in the training & consultancy services in UK ";
        return View::make('pages.communication_it', compact('pageTitle'));
    }

    //Course / English Language
    public function english_language() {
        $pageTitle = "English Language | excellence in the training & consultancy services in UK ";
        return View::make('pages.english_language', compact('pageTitle'));
    }

    //Client / Service
    public function service() {
        $pageTitle = "Service | excellence in the training & consultancy services in UK ";
        return View::make('pages.client_service', compact('pageTitle'));
    }

    //Client / Student
    public function student() {
        $pageTitle = "Student | excellence in the training & consultancy services in UK ";
        return View::make('pages.client_student', compact('pageTitle'));
    }

    // Registration
    public function registration() {
        $pageTitle = "Registration | excellence in the training & consultancy services in UK ";
        return View::make('pages.registration', compact('pageTitle'));
    }

    public function store_registrations(){
        if($this->isPostRequest()){
            $input_data = Input::all(); // input all data
            $model = new Registration();

            //save data into
            if($model->validate($input_data)) {
                DB::beginTransaction();
                try {
                    $model->create($input_data);
                    DB::commit();
                    Session::flash('message', 'Successfully Registered ! We will call you back soon.');
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

    // Ecies/Overview
    public function overview() {
        $pageTitle = "Overview | excellence in the training & consultancy services in UK ";
        return View::make('pages.overview', compact('pageTitle'));
    }


    // Ecies/Partner
    public function partner() {
        $pageTitle = "Partner | excellence in the training & consultancy services in UK ";
        return View::make('pages.partner', compact('pageTitle'));
    }

    // Ecies/Career
    public function career() {
        $pageTitle = " Career | excellence in the training & consultancy services in UK ";
        return View::make('pages.career', compact('pageTitle'));
    }

    // Ecies/Contact
    public function contact() {
        $pageTitle = "Contact | excellence in the training & consultancy services in UK ";
        return View::make('pages.contact', compact('pageTitle'));
    }


    // FAQ's
    public function faq() {
        $pageTitle = "FAQ  | Ecies | excellence in the training & consultancy services in UK ";
        return View::make('pages.faq', compact('pageTitle'));
    }

}
