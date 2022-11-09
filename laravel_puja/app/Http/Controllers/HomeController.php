<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        return view('page.landing',['title'=>"home"]);
    }
    function ticket(){
        return view('page.ticket',['title'=>"ticket"]);
    }
    function payment(){
        return view('page.payment',['title'=>"payment"]);
    }
    function test(){
        return view('page.test',['title'=>"test"]);
    }
    function login(){
        return view('auth.login',['title'=>"login"]);
    } 
}
