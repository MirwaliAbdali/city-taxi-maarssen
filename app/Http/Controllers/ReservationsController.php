<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmitted;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ReservationsController extends Controller
{
    public function index()
    {
        return view('home');
    }


    // Store Method

    public function store(Request $request)
    {
        Reservation::create(['first_name' => $request->first_name, 'phone' => $request->phone, 'where' => $request->where, 'time' => $request->time, 'start_time' => $request->start_time, 'end_time' => $request->end_time, 'special_request' => $request->special_request]);
        Mail::to('mirwaliabdali380@gmail.com')->send(new FormSubmitted($request));
        Session::flash('success', 'Saved Successfully');
        return redirect()->route('index');
    }
}
