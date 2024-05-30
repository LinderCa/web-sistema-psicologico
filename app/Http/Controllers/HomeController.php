<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //abrimos la pagina principal
    function index(){
        return view('index');
    }
}
