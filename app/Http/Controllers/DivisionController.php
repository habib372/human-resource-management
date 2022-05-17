<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table= DB::select("select * from hrm_divisions");
        return view("division.index",["divisions"=>$table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $q=DB::select("select * from hrm_departments");
        return view("division.create",["names"=>$q]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $division=$r->txtDivision;
        $department=$r->cmb_department;

        DB::insert("insert into hrm_divisions(division_name,department_name)values('$division','$department')");
        return redirect('divisions');
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
        $q=DB::select("select id,division_name,department_name from hrm_divisions where id='$id'");
        return view("division.edit",["division"=>$q]);

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
        DB::update("update hrm_divisions set division_name='$e->txtDivision',department_name='$e->cmb_department' where id='$id'");
        return redirect('divisions');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from hrm_divisions where id='$id'");
        return redirect('divisions');
    }
}
