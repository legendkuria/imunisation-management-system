<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\adminvaccine;
use App\Models\adminview;
use Illuminate\Http\Request;

class adminvaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier.addvaccine',);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $results = DB::table('addvaccine')->get();
       return view ('table_edit', compact('results'));
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
            'vname'=>'required',
            'time'=>'required',
            'period'=> 'required',
        ]);
        adminvaccine::create($request->all());
        return redirect()->route('adminvaccine.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminvaccine  $adminvaccine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adminvaccine = Admin::find($id);
        return view('Admin.editv', ['adminvaccine',$adminvaccine]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminvaccine  $adminvaccine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminvaccine  $adminvaccine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminvaccine $adminvaccine)
    {
        $request->validate([
            'vname'=>'required',
            'time'=>'required',
        ]);
        $adminvaccine = Admin::find($request->id);
        $adminvaccine->vname = $request->input('vname');
        $adminvaccine->time = $request->input('time');
        $adminvaccine->save();
        return redirect()->route('adminvaccine.index')->with('status','Vaccine Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminvaccine  $adminvaccine
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminvaccine $adminvaccine)
    {
        //
    }
}
