<?php

namespace App\Http\Controllers;

use App\Models\studies;
use Illuminate\Http\Request;

class StudiesController extends Controller
{
  
    public function addEstudios(Request $request)
    {
        $studies = studies::create($request->all());
        $studies->save();
        if($studies->id!==null){
            return  json_encode(array('status'=>'saved'));
        }else{
            return  json_encode(array('status'=>'error'));
        } 
    }

}
