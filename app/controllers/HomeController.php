<?php

class HomeController extends BaseController {

    // Home Page
    public function index() {
        $pageTitle = "Ecies | excellence in the training & consultancy services in UK ";
        return View::make('pages.index', compact('pageTitle'));
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
