<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function home()
    {
        return view ('home');
    }

    public function about()
    {
        return view ('about');
    }

    public function contact()
    {

        return view ('contact');

    }

    public function services()
    {
        return view ('services');
    }

    public function team()
    {
        return view ('services');
    }

    public function show()
    {


        return view ('pages.show');
    }
}