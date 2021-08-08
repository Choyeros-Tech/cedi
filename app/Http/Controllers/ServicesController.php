<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    
    public function store(Request $request)
    {
        $service = new services();
        $service->category = $request->category;
        $service->service = $request->service;
        $service->price = $request->price;
        $service->save();

        return $service;
    }
}
