<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoutingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    /*
     * Logout user
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}