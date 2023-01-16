<?php

namespace App\Http\Controllers;

use App\Models\adminvaccine;
use App\Models\allocate;
use Illuminate\Http\Request;

class allocateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  return view('Admin.allocate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.Index');

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
     * @param  \App\Models\allocate  $allocate
     * @return \Illuminate\Http\Response
     */
    public function show(allocate $allocate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\allocate  $allocate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Admin = adminvaccine::find($id);
        return view('Admin.editvaccine', ['Admin'=>$Admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\allocate  $allocate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, allocate $allocate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\allocate  $allocate
     * @return \Illuminate\Http\Response
     */
    public function destroy(allocate $allocate)
    {
        //
    }
}
