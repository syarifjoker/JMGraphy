<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function pricing(){
        return view('pages.pricing');
    }

    public function booking_list(){
        return view('pages.booking_list');
    }

    public function booking_register(){
        return view('pages.booking_register');
    }
}
