<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GudoeController extends Controller
{
    public function home(){
        return view ('home');
    }
    public function about(){
        return view ('about');
    }
    public function contact(){
        return view ('contact');
    }
    public function courseDetails(){
        return view ('course-details');
    }
    public function faculty(){
        return view ('faculty');
    }
    public function feedback(){
        return view ('feedback');
    }
    public function studyCenter(){
        return view ('study-centers');
    }
    public function studentSupport(){
        return view ('student-support');
    }
    public function staff(){
        return view ('staff');
    }
    public function examCenter(){
        return view ('exam-center');
    }
    public function rules(){
        return view ('rules');
    }
    public function gallery(){
        return view ('gallery');
    }
    public function fees(){
        return view ('fees');
    }
    public function profileUpdate(){
        return view ('profile-update');
    }
    public function studyMaterial(){
        return view ('study-material');
    }
}
