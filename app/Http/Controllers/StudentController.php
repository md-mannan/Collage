<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function ShowAllStudent()
    {
        $data = DB::table('students')->get();
        return view('users', ['data' => $data]);
    }

    public function viewStudent(String $id)
    {
        $data = DB::table('students')->where('id', $id)->get();

        return view('user', ['data' => $data]);
    }
    public function DeleteStudent(String $id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->route('users');
    }
}
