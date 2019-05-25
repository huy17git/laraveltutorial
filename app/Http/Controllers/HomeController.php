<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Group;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function index (Request $request) {
        $students = Student::all();
        $groups = Group::all();
        return view('home', compact('students', 'groups'));
    }

    public function changeLanguage($language) {
        Session::put('website_language', $language);
        return redirect()->back();
    }

}
