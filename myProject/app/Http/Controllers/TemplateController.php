<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        //returns the index page from the folder view > FrontEnd > index.blade.php page
        return view('FrontEnd.index');
    }
}
