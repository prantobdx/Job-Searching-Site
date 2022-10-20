<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.home');
    }

    public function aboutUs()
    {
        return view('frontEnd.about.about');
    }

    public function contactUs()
    {
        return view('frontEnd.contact.contact');
    }

    public function candidate()
    {
        return view('frontEnd.candidates.candidate');
    }

    public function resume()
    {
        return view('frontEnd.resume.resume');
    }

}
