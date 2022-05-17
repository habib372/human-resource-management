<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table=DB::select("select * from hrm_positions");
        return view("position.index",["positions"=>$table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("position.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $position=$r->txtPosition;
        $details=$r->txtPDetails;

        DB::insert("insert into hrm_positions(position_name,position_details)values('$position','$details')");
        return back();
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
        $q= DB::select("select * from hrm_positions where id='$id'");
        return view("position.edit", ["position"=>$q]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $e, $id)
    {
        DB::update("update hrm_positions set position_name='$e->txtPosition',position_details='$e->txtPDetails' where id='$id'");
        return redirect('positions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from hrm_positions where id='$id'");
        return redirect('positions');
    }
}
