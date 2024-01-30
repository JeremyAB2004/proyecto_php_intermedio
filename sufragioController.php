<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sufragioController extends Controller
{
    public function index()
    {
        return view('sufragio.index');
    }

    public function login()
    {
        return view('sufragio.login');
    }

    public function register()
    {
        return view('sufragio.register');
    }

    public function resultados()
    {
        return view('sufragio.resultados');
    }

    public function votar()
    {
        return view('sufragio.votar');
    }

}
