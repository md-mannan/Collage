<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function ShowAllStudent()
    {
        $data = DB::table('students')->get();
        // $data = DB::table('students')->where('gender', '=', 'male')->get();
        return view('users', ['data' => $data]);
    }

    public function viewStudent(String $id)
    {
        $data = DB::table('students')->find($id);

        return view('user', ['student' => $data]);
    }

    public function ShowUser(String $id)
    {
        $data = DB::table('students')->where('age', '<=', 20)->get();
        return $data;
    }
    public function DeleteStudent(String $id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->route('users');
    }
    public function AddStudent(Request $req)
    {
        $name = $req->input('studentName');
        $email = $req->input('studentEmail');
        $age = $req->input('studentAge');
        $gender = $req->input('studentGender');
        $country = $req->input('studentCountry');
        $city = $req->input('studentCity');
        $address = $req->input('studentAddress');
        $phone = $req->input('studentPhone');
        $insert = DB::table('students')->insertOrIgnore([
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'gender' => $gender,
            'country' => $country,
            'city' => $city,
            'address' => $address,
            'phone' => $phone,
            'created_at' => now()
        ]);
        if ($insert) {
            return redirect()->route('users');
        } else {
            return response()->json('Email is Duplicate');
        }
    }
    public function UpdateStudent(Request $req, String  $id)
    {
        // $id = $req->input('studentId');
        $name = $req->input('studentName');
        $email = $req->input('studentEmail');
        $age = $req->input('studentAge');
        $gender = $req->input('studentGender');
        $country = $req->input('studentCountry');
        $city = $req->input('studentCity');
        $address = $req->input('studentAddress');
        $phone = $req->input('studentPhone');
        $update = DB::table('students')->where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'gender' => $gender,
            'country' => $country,
            'city' => $city,
            'address' => $address,
            'phone' => $phone,
            'updated_at' => now()
        ]);
        if ($update) {
            return redirect()->route('users');
        }
    }
}
