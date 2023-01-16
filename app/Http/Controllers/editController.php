<?php

namespace App\Http\Controllers;

use App\Models\adminvaccine;
use App\Models\adminview;
use App\Models\edit;
use Illuminate\Http\Request;
use App\Models\Parent1;
use Illuminate\Support\Facades\DB;


class editController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.addchild');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Adminchild.add');
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
            'pname'=>'required',
            'email'=>'required',
            'cname'=>'required',
            'birth'=>'required',
            'date'=>'required',
            'gender'=>'required',
            'condition'=>'required',
            'status'=>'required',



        ]);
            $parent1=new edit;
            $parent1->pname=$request->input('pname','required');
            $parent1->email=$request->input('email','required');
            $parent1->cname=$request->input('cname','required');
            $parent1->birth=$request->input('birth','required');
            $parent1->date=$request->input('date');
            $parent1->gender=$request->input('gender');
            $parent1->condition=$request->input('condition');
            $parent1->status=$request->input('status');
            $vn=$request->input('vname');
            $parent1->vname=implode(",",$vn);
            $parent1->save();
            return redirect()->route('adminview.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\edit  $edit
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
     * @param  \App\Models\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function edit(edit $edit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, edit $edit)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function destroy(edit $edit)
    {
        //
    }
}
