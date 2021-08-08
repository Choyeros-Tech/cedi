<?php

namespace App\Http\Controllers;

use App\Models\historyLab;
use Illuminate\Http\Request;

class HistoryLabController extends Controller
{     
    public function saveResulLab(Request $request)
    {  
        historyLab::insert($request->except('_token'));
        return json_encode(array('seRegistro'=>true));
    }

    
    public function dataResultLab($id)
    {
       $history = historyLab::where('patient', '=', $id)->get();
       return json_encode($history);
    }
}
