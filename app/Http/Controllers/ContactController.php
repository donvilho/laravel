<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showinfo()
    {
        return view('pages.homework.t2.contact');
    }

    public function returninfo()
    {
        return 'Olen ContactControllerin return-lause';
    }

    public function showperson()
    {
        $name = "<span style='background-color:#ffc;'>Raaka-Arska</span>";
        return view('pages.homework.t2.person')->with('name', $name);
    }

    public function listpersons()
    {
        $persons = ['Guru Ken', 'Ainen Sani', 'Tana Ruu'];
        return view('pages.homework.t2.persons')->with('persons', $persons);
    }
}
