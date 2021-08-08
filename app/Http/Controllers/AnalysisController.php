<?php

namespace App\Http\Controllers;

use App\Models\analysis;
use App\Models\User;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    
    public function store(Request $request)
    {
       $analisis = new analysis();
       $analisis->category = $request->category;
       $analisis->name = $request->name;
       $analisis->save();

       return $analisis;
    }

    public function allUsers(){
        $users = User::get();
        return view('users', compact('users'));
    }
    

    
}
