<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        return view('demo', ['name' => 'Donald Trump']);
    }
}
