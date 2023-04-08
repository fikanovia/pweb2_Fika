<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
}