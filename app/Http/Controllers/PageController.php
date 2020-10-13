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
}
