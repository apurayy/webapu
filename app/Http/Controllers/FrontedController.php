<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontedController extends Controller
{
    public function home(){
        $pagetitle = 'My Home Page';
        return view('home',compact('pagetitle'));
    }

    public function about(){
        $pagetitle = 'My About Page';
        return view('about',compact('pagetitle'));
    }

    public function service(){
        $pagetitle = 'My Services Page';

        $services = [
            'Web design',
            'Web Development',
            'Ui/Ux Design',
            'Apps Development',
            'Laravel'
        ];

        return view('service',compact('services','pagetitle'));
    }

    public function contact(){
        $pagetitle = 'My Contact Page';
        return view('contact',compact('pagetitle'));
    }
}
