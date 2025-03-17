<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    

    public function store(Request $request){

        $fields = $request->validate(
            [
                'user_id'=>'required|integer',
                'event_id'=>'required|integer'
            ]
            );

        $reservation = Reservation::create($fields);

        return response()->json(
            [
                'reservation'=>$reservation
            ]
            );
    }
}
