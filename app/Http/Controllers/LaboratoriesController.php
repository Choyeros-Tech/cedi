<?php

namespace App\Http\Controllers;

use App\Models\laboratories;
use Illuminate\Http\Request;

class LaboratoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataLaboratory($id)
    {
        $datos = laboratories::where('patient', '=', $id)->get();         
        return json_encode($datos);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addLaboratory(Request $request)
    {

        $studies = laboratories::create($request->all());
        $studies->save();
        if($studies->id!==null){
            return  json_encode(array('status'=>'saved'));
        }else{
            return  json_encode(array('status'=>'error'));
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laboratories  $laboratories
     * @return \Illuminate\Http\Response
     */
    public function show(laboratories $laboratories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laboratories  $laboratories
     * @return \Illuminate\Http\Response
     */
    public function edit(laboratories $laboratories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laboratories  $laboratories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laboratories $laboratories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laboratories  $laboratories
     * @return \Illuminate\Http\Response
     */
    public function destroy(laboratories $laboratories)
    {
        //
    }
}
