<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_view()
    {
        return view('admin.add_doctor.home');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor();

        $image = $request->file;
        $image_name = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('doctors_images', $image_name);

        $doctor->image = $image_name;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $doctor->save();

        return redirect()->back()->with('success', 'Doctor added successfully');

    }
}
