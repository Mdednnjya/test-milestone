<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservations.create_rsv');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'ActivePhoneNumber' => 'required|string|max:15',
            'Typeofservice' => 'required|in:Haircuts and styling,Manicure and pedicure,Facial treatments',
            'DateandTime' => 'required|date_format:Y-m-d H:i:s',
        ]);

        Reservation::create([
            'name' => $request->Name,
            'active_phone_number' => $request->ActivePhoneNumber,
            'type_of_service' => $request->Typeofservice,
            'date_and_time' => $request->DateandTime,
        ]);

        return redirect()->route('reservations.create_rsv')->with('success', 'Reservation created successfully.');
    }
}

