<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use DB;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $em= DB::select("select id,name,position,email,phone,country,city from hrm_employees");
        $em=Employee::all();
        return view("employee.index",["employees"=>$em]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $q=DB::select("select * from hrm_divisions");
        $d=DB::select("select * from hrm_departments");
        $p=DB::select("select * from hrm_positions");

        return view("employee.create",["divis"=>$q],["departs"=>$d],["pos"=>$p]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $e)
    {
        $fileName = time().'.'.$e->file->extension();  
        $e->file->move(public_path('uploads'), $fileName);

        return back()
        ->with('success','You have successfully upload file.')
        ->with('file',$fileName);
        
        $name=$e->txtFName;
        $gender=$e->cmbGender;
        $religion=$e->txtReligion;
        $email=$e->txtEmail;
        $phone=$e->txtPhone;
        $Alter_Phone=$e->txtAlterPhone;
        $country=$e->txtCountry;
        $city=$e->txtCity;
        $zip_code=$e->txtZipCode;

        $position=$e->cmbPosition;
        $department=$e->cmbDepartment;
        $division=$e->cmbDivision;
        $hireing_date=$e->Hdate;
        $joining_date=$e->Jdate;
        $duty_type=$e->cmbDutyType;
        $rate_type=$e->cmbRateType;
        $salary=$e->txtSalary;
        $pay_frequency=$e->cmbPayFreq;
        
        $date_of_birth=$e->Bdate;        
        $marital_status=$e->cmbStatus;
        $blood_group=$e->cmbBlood;
        $present_address=$e->txtPreAddress;
        $permanent_address=$e->txtPerAddress;

       DB::insert("insert into hrm_employees(name,gender,religion,email,phone,Alter_Phone,country,city,zip_code,position,department,division,hireing_date,joining_date,duty_type,rate_type,salary,pay_frequency,date_of_birth,marital_status,blood_group,present_address,permanent_address,img_name)values('$name','$gender','$religion','$email','$phone','$Alter_Phone','$country','$city','$zip_code','$position','$department','$division','$hireing_date','$joining_date','$duty_type','$rate_type','$salary','$pay_frequency','$date_of_birth','$marital_status','$blood_group','$present_address','$permanent_address','$fileName')");

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
        $q=DB::select("select id,name,gender,religion,email,phone,Alter_Phone,country,city,zip_code,position,department,division,hireing_date,joining_date,duty_type,rate_type,salary,pay_frequency,date_of_birth,marital_status,blood_group,present_address,permanent_address,img_name from hrm_employees where id='$id'");
        return view("employee.view",["employee"=>$q]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $q= DB::select("select * from hrm_employees where id='$id'");
        return view("employee.edit",["employee"=>$q]); 
        
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
        DB::update("update hrm_employees set name='$e->txtFName',gender='$e->cmbGender',religion='$e->txtReligion',email='$e->txtEmail',phone='$e->txtPhone',Alter_Phone='$e->txtAlterPhone',country='$e->txtCountry',city='$e->txtCity',zip_code='$e->txtZipCode',position='$e->cmbPosition',department='$e->cmbDepartment',division='$e->cmbDivision',hireing_date='$e->Hdate',joining_date='$e->Jdate',duty_type='$e->cmbDutyType',rate_type='$e->cmbRateType',salary='$e->txtSalary',pay_frequency='$e->cmbPayFreq',date_of_birth='$e->Bdate',marital_status='$e->cmbStatus',blood_group='$e->cmbBlood',present_address='$e->txtPreAddress',permanent_address='$e->txtPerAddress',img_name='$e->file' where id='$id' ");

        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from hrm_employees where id ='$id'");
        return back();

    }
}
