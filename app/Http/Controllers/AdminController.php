<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function add_view()
    {
        return view('admin.add_doctor.home');
    }
}
