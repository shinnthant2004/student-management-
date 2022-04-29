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
    }
}
