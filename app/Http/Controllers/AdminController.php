<?php

namespace App\Http\Controllers;

class AdminController extends Controller{
    function __construct()
    {

    }

    /**
     * Admin landing page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('admin.app');
    }
}
