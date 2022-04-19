<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function index(){
        $data['students'] = Student::where("status","1")->get();
        $data['title'] = "Active";
        return view("admin/manageStudent",$data);
    }
    function newAdmission(){
        $data['students'] = Student::where("status","0")->get();
        $data['title'] = "new";
        return view("admin/manageStudent",$data);
    }

    function passOut(){
        $data['students'] = Student::where("status","2")->get();
        $data['title'] = "pass out";   
        return view("admin/manageStudent",$data);
    }
    


}