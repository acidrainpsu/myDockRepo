<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cow;
use App\Farm;
use App\Cowbreeder;
use DB;

class CowsController extends Controller
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
        return view('cows.create');
    }


    public function shows()
    {
        return view('cows.shows');
    }

    public static function fetchData()
    {
            //
            $cows = DB::table('cows')
                ->leftJoin('farms','cows.farm_id','=','farms.farm_id')->orderBy('cow_name','desc')
                ->get();

            $data = array(
                'cows' => $cows
            );
       


           return view('cows.shows')->with($data);
              
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
            'cow_name' => 'required'
        ]);
        
        //Create farmer
        $cow = new Cow;
        $cow->ear_tag = $request->input('ear_tag');
        $cow->farm_id = $request->input('farm_id');
        $cow->register_code   = $request->input('register_code');
        $cow->cow_name  = $request->input('cow_name');
        $cow->sex  = $request->input('sex');
        $cow->breed_id  = $request->input('breed_id');
        $cow->color = $request->input('color');
        $cow->birthdate   = $request->input('birthdate');
        $cow->birth_weight  = $request->input('birth_weight');
        $cow->sire   = $request->input('sire');
        $cow->dam    = $request->input('dam');
        $cow->breeder_id  = $request->input('breeder_id');
        $cow->owner_id   = $request->input('owner_id');
        $cow->save();

        return view('/dashboard');//Go back to another page
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
