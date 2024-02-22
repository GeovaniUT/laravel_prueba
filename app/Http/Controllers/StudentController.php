<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(): View{
        return view('student');
    }

    public function store(StudentRequest $request){

        return "formario procesando";
    }
}
