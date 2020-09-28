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

    public function admin_user(){
        return view('pages.admin_user');
    }

    public function admin_main(){
        return view('pages.admin_main');
    }

    public function admin_booking(){
        return view('pages.admin_booking');
    }
}
