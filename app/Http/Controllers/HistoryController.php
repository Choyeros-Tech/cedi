<?php

namespace App\Http\Controllers;

use App\Models\history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HistoryController extends Controller
{
   
    public function dataHistory($id)
    {
        $datos = history::where('patient', '=', $id)->get();         
        return json_encode($datos);  
    }

    
    public function addHistory(Request $request)
    {

        $patient = $request->patient;
        $pat = history::where('patient', $patient)->first();
        
        if (!is_null($pat)) {
            history::where('patient', $patient)->update($request->except('_token'));
            return back()->with('status','updated');
        }else{
            history::insert($request->except('_token'));
            return back()->with('status','saved');
        }

    }

    
    
}
