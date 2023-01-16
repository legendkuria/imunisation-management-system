<?php

namespace App\Http\Controllers;

use App\Models\viewchild;
use Illuminate\Http\Request;

class viewchildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parent1.view');
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
     * @param  \App\Models\viewchild  $viewchild
     * @return \Illuminate\Http\Response
     */
    public function show(viewchild $viewchild)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\viewchild  $viewchild
     * @return \Illuminate\Http\Response
     */
    public function edit(viewchild $viewchild)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\viewchild  $viewchild
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, viewchild $viewchild)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\viewchild  $viewchild
     * @return \Illuminate\Http\Response
     */
    public function destroy(viewchild $viewchild)
    {
        //
    }
}
