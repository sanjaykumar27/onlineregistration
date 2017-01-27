<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class onlineRegistration extends Controller
{
    public function onlineRegistration()
    {
        return view('files.student.registration.onlineRegistration');
    }
}
