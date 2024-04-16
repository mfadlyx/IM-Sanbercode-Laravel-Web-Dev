<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('index');
    }

    public function form() {
        return view('form');
    }

    public function welcome(Request $request){
        $firstName = $request->input('first');
        $lastName = $request->input('last');

        return view('welcome', ["firstName" => $firstName, "lastName" => $lastName]);
    }
}
