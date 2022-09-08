<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{   
    public function index(){
        $users= DB::table('membres')->get();
        $hommes= DB::table('membres')->where('genre' , "Homme")->get();
        return view('welcome', compact('users','hommes'));
    }
}
