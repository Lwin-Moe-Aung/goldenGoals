<?php

namespace App\Http\Controllers;

use App\Http\Requests\GoldengoalRequest;
use App\Goldengoal;
use Illuminate\Http\Request;

class GoldengoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('phonebook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getData()
    {
        return Goldengoal::orderBy('name','DESC')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoldengoalRequest $request)
    {
        $gg = new Goldengoal;
        $gg->name = $request->name;
        $gg->phone = $request->phone;
        $gg->email = $request->email;
        $gg->save();
        return $gg;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goldengoal  $goldengoal
     * @return \Illuminate\Http\Response
     */
    public function show(Goldengoal $goldengoal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goldengoal  $goldengoal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goldengoal $goldengoal)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goldengoal  $goldengoal
     * @return \Illuminate\Http\Response
     */
    public function update(GoldengoalRequest $request)
    {
        $gg = Goldengoal::find($request->id);
        $gg->name = $request->name;
        $gg->phone = $request->phone;
        $gg->email = $request->email;
        $gg->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goldengoal  $goldengoal
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        
        Goldengoal::where('id',$id)->delete();
    }
}
