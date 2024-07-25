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
        $data = DB::table('students')->where('id', $id)->get();

        return view('user', ['data' => $data]);
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
        $name = $req->input('name');
        $email = $req->input('email');
        $age = $req->input('age');
        $gender = $req->input('gender');
        $country = $req->input('country');
        $city = $req->input('city');
        $address = $req->input('address');
        $phone = $req->input('phone');
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
    public function UpdateStudent(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $email = $req->input('email');
        $age = $req->input('age');
        $gender = $req->input('gender');
        $country = $req->input('country');
        $city = $req->input('city');
        $address = $req->input('address');
        $phone = $req->input('phone');
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
