<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;
// importando View
use View;

class HomeController extends Controller
{
    public function index(){
		return View::make('home');
    }
}
