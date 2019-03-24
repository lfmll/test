<?php

namespace App\Http\Controllers;

use App\Subsidiary;
use Illuminate\Http\Request;

class SubsidiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsidiary=Subsidiary::all();
        return view("subsidiary.index",["subsidiary"=>$subsidiary]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subsidiary=new Subsidiary();
        return view("subsidiary.create",["subsidiary"=>$subsidiary]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subsidiary=new Subsidiary;
        $subsidiary->name=$request->name;
        $subsidiary->address=$request->address;
        if ($subsidiary->save()) {
            return redirect("/subsidiary");
        }else{
            return view("subsidiary.create",["subsidiary"=>$subsidiary]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subsidiary  $subsidiary
     * @return \Illuminate\Http\Response
     */
    public function show(Subsidiary $subsidiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subsidiary  $subsidiary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subsidiary=Subsidiary::find($id);
        return view("subsidiary.edit",["subsidiary"=>$subsidiary]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subsidiary  $subsidiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subsidiary=Subsidiary::find($id);
        $subsidiary->name=$request->name;
        $subsidiary->address=$request->address;
        if ($subsidiary->save()) {
            return redirect("/subsidiary");
        }else{
            return view("subsidiary.edit",["subsidiary"=>$subsidiary]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subsidiary  $subsidiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subsidiary $subsidiary)
    {
        //
    }
}
