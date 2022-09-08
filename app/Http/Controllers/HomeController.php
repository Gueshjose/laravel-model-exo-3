<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{   
    public function index(){
        $users= DB::table('membres')->get();
        $hommes= DB::table('membres')->where('genre' , "Homme")->get();
        $femmes= DB::table('membres')->where('genre' , "Femme")->get();
        $hommesCond= DB::table('membres')->where('genre' , "Homme")->where('age' , '>' , 17)->where('age' , '<' , 35)->get();
        $femmesCond= DB::table('membres')->where('genre' , "Femme")->where('age' , '>' , 17)->where('age' , '<' , 35)->get();
        $usersNoCond= DB::table('membres')->where('age' , '<' , 18)->orWhere('age' , '>' , 34)->get();

        return view('welcome', compact('users','hommes','femmes', 'hommesCond','femmesCond', "usersNoCond"));
    }
}
