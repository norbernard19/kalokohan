<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocalStudents;
use App\ForeignStudents;
use App\AllStudents;

class crudController extends Controller
{
   public function addStudents(){
    
    return view('user.addStudent');
   }

   public function store(Request $request){
      $request->validate([
         'student_type' => 'required|in:local_student,foreign_student',
         'name' => 'required|string|max:200',
         'id_number' => 'required|integer',
         'age' => 'required|integer',
         'gender' => 'required|in:male,female',
         'city' => 'required|string|max:200',
         'mobile_number' => 'required|string|max:200',
         'grades' => 'required|between:0,100',
         'email' => 'required|email|max:200',
     ]);

     $data = [ 
      'student_type' =>$request->student_type,
      'name' =>$request->name,
      'id_number' =>$request->id_number,
      'age' =>$request->age,
      'gender' =>$request->gender,
      'city' =>$request->city,
      'mobile_number' =>$request->mobile_number,
      'grades' =>$request->grades,
      'email' =>$request->email

     ];
     
     if ($data['student_type'] === 'local_student') {
    
      $student = LocalStudents::create($data);
      AllStudents::create(['local_student_id'=> $student->id, 'student_type'=>'local']);
      
      // AllStudents::create($student);   
     } else {
         $student = ForeignStudents::create($data);
         AllStudents::create(['foreign_student_id'=> $student->id, 'student_type'=>'foreign']);
     } 
     
   
 
     return redirect()->route('list');
   }

   public function listPage(){

      return view('user.tableList');
  }

   public function tableList()
   {
      $myArray=[];
      $allStudents = AllStudents::with(['localstudent', 'foreignstudent'])->get()->toArray();
      // dd($allStudents);
      foreach($allStudents as $students){
         $myArray[]= $students['foreignstudent'] ?? $students['localstudent'];
      }
      
      return view('user.tableList', compact('myArray'));

   
   
   //  $localStudents = LocalStudents::with('allStudent')->get();

   //  $foreignStudents = ForeignStudents::with('allStudent')->get();

   //  return view('user.tableList', [
   //      'localStudents' => $localStudents,
   //      'foreignStudents' => $foreignStudents
   //  ]);
   }
}


