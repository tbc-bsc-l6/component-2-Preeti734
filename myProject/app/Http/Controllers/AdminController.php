<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $is_admin=Auth::user()->is_admin;

        if($is_admin=='1')
        {
            return view('dashboard');
        }
        else
        {
            return view('FrontEnd.index');
        }
    }


}
