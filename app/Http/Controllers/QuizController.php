<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    function index(){
        return view('pages.quiz');
    }

    function question(){
        return view('pages.questionquiz');
    }

    function result(){
        return view('pages.resultquiz');
    }
}
