<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caffe;

class bookingController extends Controller
{
    function index()
    {
        $caffes = Caffe::all();
        return view('booking', compact('caffes'));
    }
}
