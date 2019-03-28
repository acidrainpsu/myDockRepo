<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Farmer; // use model 
use DB;

class FarmersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('farmers.create');
    }

    public static function fetchData(){
        $farmers = Farmer::all();
        return $farmers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check require 
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        // Create farmer
        $farmer = new Farmer;
        $farmer->register_code = $request->input('register_code');
        $farmer->name = $request->input('name');
        $farmer->lastname   = $request->input('lastname');
        $farmer->phone  = $request->input('phone');
        $farmer->address  = $request->input('address');
        $farmer->role   = '0';
        $farmer->save();

        return view('farmers.postinsert') ;//Go back to another page

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
