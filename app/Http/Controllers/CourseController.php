<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Course;
use Session;


class CourseController extends Controller
{
    public function add(){
        $r = request();
        $registerForm = Course::create([
        'typeofStudent'=>$r->studentName,
        'first_name'=>$r->studentEmail,
        'last_name'=>$r->studentPhoneno,
        'dob'=>$r->studentPreferreddate, 
        'icNo'=>$r->studentPreferredtime, 
        'nationality'=>$r->studentFieldofinterest,
        'passport_num'=>$r->studentFieldofinterest,
        'gender'=>$r->studentFieldofinterest,
        'mobilenum'=>$r->studentFieldofinterest,
        'email_address'=>$r->studentFieldofinterest,
        'address'=>$r->studentFieldofinterest,
        'city/town'=>$r->studentFieldofinterest,
        'postcode'=>$r->studentFieldofinterest,
        'state'=>$r->studentFieldofinterest,
        'country'=>$r->studentFieldofinterest,
        'academicqualification'=>$r->studentFieldofinterest,
        'entrylevel'=>$r->studentFieldofinterest,
        'programmelevel'=>$r->studentFieldofinterest,
        'faculty/school'=>$r->studentFieldofinterest,
        'programmename'=>$r->studentFieldofinterest,
      
      
      

      
     ]);
        Session::flash('success', "Course registered successfully!"); 
    return redirect()->route('viewForm');
   
}

public function view(){
    
    $viewForm=DB::table('courses')
    ->select('courses.*')
    ->get();
    return view('showForm')->with('courses', $viewForm);
   }

}