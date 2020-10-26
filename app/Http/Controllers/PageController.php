<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

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


    public function homeworkView($harj,$teht)
    {
        return view('pages.homework.h' . $harj . '.t' . $teht.'.index');
    }

    public function H5_mainView()
    {
        return view('pages.homework.h5.t3.main');
    }

    public function H5_basketView()
    {
        return view('pages.homework.h5.t3.basket');
    }

    public function H7MainView()
    {

        return view('pages.homework.h7.t1.main');
    }

    public function H7regexp(Request $code)
    {

        $pattern = '(^[0-9]{5}$|^[0-9]{5}-[0-9]{4}$)';

        $test = $code->code;
        if (preg_match($pattern, $test, $matches)) {

            return view('pages.homework.h7.t1.reg')->with('matches', $matches);
        } else {
            return view('pages.homework.h7.t1.reg')->with('matches', $test);
        }
    }

    public function H7DateMainView()
    {

        return view('pages.homework.h7.t2.main');
    }

    public function H7Date(Request $code)
    {
        $test = $code->code;
        $dt = DateTime::createFromFormat("Y-m-d", $test);
        if($dt !== false && !array_sum($dt::getLastErrors())){
            return view('pages.homework.h7.t2.date')->with('date',$test);
        }
        else{
            return view('pages.homework.h7.t2.date')->with('date',null);
        }
        
    }

    public function H7Search(){

        return view('pages.homework.h7.t3.main');
    }

    public function H7MetaSearch(Request $str){

       switch($str->list){
           case 'Google': 
            return redirect()->away(url('https://www.google.com/search?q='.urlencode($str->str)));
            case 'Bing':
            return redirect()->away(url('https://www.bing.com/search?q='.urlencode($str->str)));
       }


    }


    public function H7T4_index(){

        return view('pages.homework.h7.t3.main');
    }

    public function H7T4_search(Request $str){

       switch($str->list){
           case 'Google': 
            return redirect()->away(url('https://www.google.com/search?q='.urlencode($str->str)));
            case 'Bing':
            return redirect()->away(url('https://www.bing.com/search?q='.urlencode($str->str)));
       }


    }


}
