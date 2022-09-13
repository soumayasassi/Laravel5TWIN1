<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function show($name)
    {

return view('Home.show', ['name'=> $name]) ;
       // return view('Home.show', compact('name')) ;
    }

    public function form()
    {
        return view('form') ;
    }

    public function verifage()
    {
        return view('verif') ;
    }
}
