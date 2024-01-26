<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {

        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = doctor::all();
            return view('welcome', compact('doctor'));
        }


    }

    public function appointment(Request $request)
    {
        $appointment = new appointment;

        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->phone = $request->number;
        $appointment->doctor = $request->doctor;
        $appointment->date = $request->date;
        $appointment->message = $request->message;
        $appointment->status = 'In Progress';

        if (Auth::id()) {
            $appointment->user_id = Auth::user()->id;
        }

        $appointment->save();

        return redirect()->back()->with('success', 'Appointment Request successfully. We will contact you soon.');


    }

    public function my_appointment()
    {
        if (Auth::id()) {

            $user_id = Auth::user()->id;
            $appointment = appointment::where('user_id', $user_id)->get();

            return view('user.my_appointment', compact('appointment'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appointment($id)
    {

        $appointment = appointment::find($id);
        $appointment->delete();

        return redirect()->back()->with('success', 'Appointment Cancelled');

    }

}
