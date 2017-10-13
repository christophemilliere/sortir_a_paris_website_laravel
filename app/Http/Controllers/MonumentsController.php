<?php

namespace App\Http\Controllers;

use App\Models\Monument;
use Illuminate\Http\Request;

class MonumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('monuments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monuments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        auth()->user()->publish(new Monument(request(['name','desc','url','address','city','zip_code','lat','lng'])));
        return redirect('/home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monument  $monument
     * @return \Illuminate\Http\Response
     */
    public function show(Monument $monument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Monument  $monument
     * @return \Illuminate\Http\Response
     */
    public function edit(Monument $monument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Monument  $monument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monument $monument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Monument  $monument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monument $monument)
    {
        //
    }
}
