<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MonthlyAttendance extends Controller
{
    public function index(){

        $t= DB::select("select * from hrm_attendances");
        return view("attendance.index3",["attens"=>$t]);
    }
}
