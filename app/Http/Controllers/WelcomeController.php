<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller {
    /**
     * Return the home template.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('welcome');
    }
}
