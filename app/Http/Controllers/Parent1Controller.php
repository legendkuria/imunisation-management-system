<?php

namespace App\Http\Controllers;

use App\Models\Parent1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Parent1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('parent1.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('parent1.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'cname'=>'required',
            'gender'=>'required',
            'date'=>'required',
            'location'=>'required',
            'weight'=>'required',
        ]);
            $parent1=new Parent1;
            $parent1->email=$request->input('email','required');
            $parent1->cname=$request->input('cname','required');
            $parent1->gender=$request->input('gender');
            $parent1->date=$request->input('date');
            $parent1->location=$request->input('location');
            $parent1->weight=$request->input('weight');
            $vn=$request->input('vname');
            $parent1->vname=implode(",",$vn);
            $parent1->save();
            return redirect()->route('parent1.create')
            ->with('success','Product updated successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parent1  $parent1
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $ids=$request->input('id');

       DB::update('update parent1 set * where id', ["$ids"]);
       return redirect()->route('Admin.index')
            ->with('success','Product updated successfully');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parent1  $parent1
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent1 = Parent1::find($id);
        return view('parent1.edit', ['parent1'=>$parent1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parent1  $parent1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parent1 $parent1)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parent1  $parent1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parent1 $parent1)
    {
        //
    }}
