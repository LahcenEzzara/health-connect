<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
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

    public function show_appointment()
    {
        $appointment = appointment::all();

        return view('admin.show_appointment', compact('appointment'));
    }

    public function approve_appointment($id)
    {
        $appointment = appointment::find($id);

        $appointment->status = 'approved';

        $appointment->save();

        return redirect()->back();
    }

    public function cancel_appointment($id)
    {
        $appointment = appointment::find($id);

        $appointment->status = 'canceled';

        $appointment->save();

        return redirect()->back();
    }

    public function show_doctor()
    {
        $doctor = doctor::all();

        return view('admin.show_doctor', compact('doctor'));
    }


    public function update_doctor($id)
    {
        $doctor = doctor::find($id);

        return view('admin.update_doctor', compact('doctor'));
    }

    public function delete_doctor($id)
    {
        $doctor = doctor::find($id);

        $doctor->delete();

        return redirect()->back()->with('success', 'Doctor deleted successfully');
    }

    public function edit_doctor(Request $request, $id)
    {
        $doctor = doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $image = $request->file;

        if ($image) {
            $image_name = time() . '.' . $image->getClientOriginalExtension();

            $request->file->move('doctors_images', $image_name);

            $doctor->image = $image_name;
        }


        $doctor->save();

        return redirect()->back()->with('success', 'Doctor updated successfully');
    }

}
