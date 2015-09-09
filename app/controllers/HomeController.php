<?php

class HomeController extends BaseController {

    protected function isPostRequest()
    {
        return Input::server("REQUEST_METHOD") == "POST";
    }

    // Home Page
    public function index() {
        $data_security = Post::where('type', 'security')->latest('id')->first();
        $data_consultancy = Post::where('type', 'consultancy')->latest('id')->first();
        $data_ict_workshop = Post::where('type', 'ict-workshop')->latest('id')->first();
        $ecies_overview = Post::where('type', 'ecies-overview')->latest('id')->first();
        $recent_work = RecentWork::latest('id')->take(4)->get();

        $pageTitle = "Ecies | excellence in the training & consultancy services in UK ";
        return View::make('pages.index', compact(
            'pageTitle', 'data_security', 'data_consultancy', 'data_ict_workshop',
            'ecies_overview', 'recent_work'
        ));
    }

    // Solution / ICT Support
    public function ict_support() {
        $pageTitle = "ICT Support | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'ict-support')->latest('id')->first();
        return View::make('pages.ict_support', compact('pageTitle', 'data'));
    }

    // Solution / Security
    public function security() {
        $pageTitle = "Security | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'security')->latest('id')->first();
        return View::make('pages.solution_security', compact('pageTitle', 'data'));
    }

    // Solution / Consultancy
    public function consultancy() {
        $pageTitle = "Consultancy | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'consultancy')->latest('id')->first();
        return View::make('pages.solution_consultancy', compact('pageTitle', 'data'));
    }

    public function web_design() {
        $pageTitle = "Web Design | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'web-design')->latest('id')->first();
        return View::make('pages.web_design', compact('pageTitle', 'data'));
    }

    //Course / Communication IT
    public function communication_it() {
        $pageTitle = "Courses | excellence in the training & consultancy services in UK ";
        $data = Course::where('type', 'communication-it')->latest('id')->get();
        return View::make('pages.communication_it', compact('pageTitle', 'data'));
    }

    //Course / English Language
    public function english_language() {
        $pageTitle = "English Language | excellence in the training & consultancy services in UK ";
        $data = Course::where('type', 'english-language')->latest('id')->get();
        return View::make('pages.english_language', compact('pageTitle', 'data'));
    }

    //Client / Service
    public function service() {
        $pageTitle = "Service | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'client-service')->latest('id')->first();
        return View::make('pages.client_service', compact('pageTitle', 'data'));
    }

    //Client / Student
    public function student() {
        $pageTitle = "Student | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'client-student')->latest('id')->first();
        return View::make('pages.client_student', compact('pageTitle', 'data'));
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
        $data = Post::where('type', 'ecies-overview')->latest('id')->first();
        return View::make('pages.overview', compact('pageTitle', 'data'));
    }


    // Ecies/Partner
    public function partner() {
        $pageTitle = "Partner | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'ecies-partner')->latest('id')->first();
        return View::make('pages.partner', compact('pageTitle', 'data'));
    }

    // Ecies/Career
    public function career() {
        $pageTitle = " Career | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'ecies-career')->latest('id')->first();
        return View::make('pages.career', compact('pageTitle', 'data'));
    }

    // Ecies/Contact
    public function contact() {
        $pageTitle = "Contact | excellence in the training & consultancy services in UK ";
        $data = Post::where('type', 'web-design')->latest('id')->first();
        return View::make('pages.contact', compact('pageTitle'));
    }

    public function store_contact(){
        if($this->isPostRequest()){
            $input_data = Input::all(); // input all data
            $model = new Contact();

            //save data into
            if($model->validate($input_data)) {
                DB::beginTransaction();
                try {
                    $model->create($input_data);
                    DB::commit();
                    Session::flash('message', 'Submitted Successfully ! We will get back to you soon.');
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


    // FAQ's
    public function faq() {
        $pageTitle = "FAQ  | Ecies | excellence in the training & consultancy services in UK ";
        $data = Faq::latest('id')->get();
        return View::make('pages.faq', compact('pageTitle', 'data'));
    }

}
