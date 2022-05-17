<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t= DB::select("select * from hrm_attendances");
        return view("attendance.index",["attens"=>$t]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $q=DB::select("select id, name from hrm_employees");
        return view("attendance.create",["names"=>$q]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $emp_id=$r->txtID;
        $employee=$r->cmb_employee;
        $in_time=$r->Intime;
        $out_time=$r->Outtime;
        $date=$r->date;

        DB::insert("insert into hrm_attendances(emp_id,emp_name,in_time,out_time,date)values('$emp_id','$employee','$in_time','$out_time',' $date')");
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from hrm_attendances where id='$id'");
        return redirect("attendances");
    }
}
