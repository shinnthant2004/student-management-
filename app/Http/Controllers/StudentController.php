<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
     return view('home',[
         'students'=>Student::all()
     ]);
    }
    public function show(){
      return view('show');
    }
    public function create(){
       $formData=request()->validate([
           'cne'=>['required','min:5'],
           'firstname'=>['required','min:3'],
           'lastname'=>['required','min:3'],
           'age'=>['required'],
           'speciality'=>['required','min:3'],
       ]);
       $formData['avatar']=request()->file('image')->store('studentImages');
       Student::create($formData);
       return back()->with('success','New Student has been added');
    }
    public function edit(Student $student){
    return view('edit',[
        'student'=>$student
    ]);
    }
    public function editing(Request $request,Student $student){
     $student->CNE=$request->cne;
     $student->firstname=$request->firstname;
     $student->lastname=$request->lastname;
     $student->age=$request->age;
     $student->speciality=$request->speciality;
     $student->save();
     return back()->with('success','Student informations have been updated');
    }
    public function destroy(Student $student){
          $student->delete();
          return redirect()->back()->with('success','That student has been deleted');
    }
    public function detail(Student $student){
      return view('detail',[
         'student'=>$student
      ]);
    }
}
