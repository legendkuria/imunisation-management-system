<?php

namespace App\Http\Controllers;

use App\Models\adminview;
use Illuminate\Http\Request;

class adminviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Admin = \App\Models\Parent1::all();
        return view ('Admin.child', compact('Admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminview  $adminview
     * @return \Illuminate\Http\Response
     */
    public function show(adminview $adminview)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminview  $adminview
     * @return \Illuminate\Http\Response
     */
    public function edit(adminview $adminview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminview  $adminview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminview $adminview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminview  $adminview
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminview $adminview)
    {
        //
    }
}
