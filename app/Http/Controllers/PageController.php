<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function assingments()
    {
        return view('pages.assignments');
    }


    public function homeworkView($id)
    {
        return view('pages.homework.h5t' . $id.'.t'.$id);
    }

    public function H5_mainView()
    {
        return view('pages.homework.h5t3.main');
    }

    public function H5_basketView()
    {
        return view('pages.homework.h5t3.basket');
    }

    public function H7MainView(){

      return view('pages.homework.h7.t1.main');
    }

    public function H7regexp(Request $code){
        
        $pattern = '(^[0-9]{5}$|^[0-9]{5}-[0-9]{4}$)';

        $test = $code->code;
        if(preg_match($pattern, $test, $matches)){

            return view('pages.homework.h7.t1.reg')->with('matches', $matches);
        }
        else{
            return view('pages.homework.h7.t1.reg')->with('matches', $test);
        }
    }
}
