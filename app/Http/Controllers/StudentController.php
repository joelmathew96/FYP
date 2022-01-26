<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Student;
use Session;


class StudentController extends Controller
{
    public function add(){
        $r = request();
        $registerEvent = Student::create([
        'name'=>$r->studentName,
        'email_address'=>$r->studentEmail,
        'phoneno'=>$r->studentPhoneno,
        'preferredDate'=>$r->studentPreferreddate, 
        'preferredTime'=>$r->studentPreferredtime, 
        'fieldofinterest'=>$r->studentFieldofinterest,
      
     ]);
        Session::flash('success', "Event registered successfully!"); 
    return redirect()->route('viewEvent');
   
  }
       
  public function view(){
    
    $viewEvent=DB::table('students')
    ->select('students.*')
    ->get();
    return view('showEvent')->with('students', $viewEvent);
   }
     
  
}


