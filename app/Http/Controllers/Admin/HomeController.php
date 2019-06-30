<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function user()
    {
        return "HomeController Admin";
    }

    public function index()
    {
        
        echo "<br>";
        return 'HomeController Admin Index';
    }
}
