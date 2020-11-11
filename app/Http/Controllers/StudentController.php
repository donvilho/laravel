<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentjson()
    {
        return Student::all();
    }

    public function coursejson()
    {
        return Course::all();
    }

    public function studentlist()
    {
        $students = Student::paginate(2);
        return view('studentronic/students')->with('students', $students);
    }
   public function student()
    {
        return view('studentronic/welcome');
    }
    public function courses()
    {
        $course = Course::all();
        //var_dump($course); id on primarykey
        return view('studentronic/studentincourses')->with('studentincourses', $course);
    }

    public function courseview()
    {
        $id = request('id');
        $users = DB::table('student')
            ->select(
                'student.id',
                DB::raw("student.lastname AS Sukunimi"),
                DB::raw("student.firstname AS Etunimi"),
                DB::raw("course.name as Kurssi"),
                'course.credits',
                'student_has_course.created_at'
            )
            ->join('student_has_course', 'student.id', '=', 'student_has_course.student_id')
            ->join('course', 'course.id', '=', 'student_has_course.course_id')
            ->where('course.id', '=', "$id")
            ->orderBy('course.credits', 'desc')
            ->get();

            //var_dump($users);
        return view('studentronic/studentcourse')->with('users', $users);
    }

       public function studentform() {
          return view('studentronic/studentform');
    }

    public function store() {
        Student::create(request()->all());
        return redirect(url('/student'));  
    }


    public function studentcredits()
    {

        // Luetaan linkin mukana tullut käyttäjän id
        $id = request('id');

        $studentcredits = DB::table('student')
            ->select(
                'student.id',
                DB::raw("student.lastname AS Sukunimi"),
                DB::raw("student.firstname AS Etunimi"),
                DB::raw("course.name as Kurssi"),
                'course.credits',
                'student_has_course.created_at'
            )
            ->join('student_has_course', 'student.id', '=', 'student_has_course.student_id')
            ->join('course', 'course.id', '=', 'student_has_course.course_id')
            ->where('student.id', '=', "$id")
            ->orderBy('course.credits', 'desc')
            ->get();

        // return $studentcredits;
        return view('studentronic/studentcredits')->with('studentcredits', $studentcredits);
    }
}
