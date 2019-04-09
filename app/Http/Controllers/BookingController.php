<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Carbon\Carbon;
use App\ProcessingRq;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        $nonBookedVehicles = array();
        foreach ($vehicles as $item) {
            if ($item->booked == false) {
                array_push($nonBookedVehicles, $item);
            }
        }
        $in_niz = [
            "pick_up_location",
            "pick_up_date",
            "pick_up_time",
            "drop_off_location",
            "drop_off_date",
            "drop_off_time"
        ];
        $req = array(
            $in_niz[0] => request("pick_up_location"),
            $in_niz[1] => request("pick_up_date"),
            $in_niz[2] => request("pick_up_time"),
            $in_niz[3] => request("drop_off_location"),
            $in_niz[4] => request("drop_off_date"),
            $in_niz[5] => request("drop_off_time"),
        );

        session()->put('step-1', $req);

        return view('booking', compact('nonBookedVehicles'));
    }

    public function step1($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $req = session()->get('step-1');
        
        $startDate = Carbon::parse($req['pick_up_date']);
        $endDate = Carbon::parse($req['drop_off_date']);
       // dd($endDate->diffInDays($startDate));

        $req1 = [
            "car_id" => $vehicle->id,
            "sum_price" => ($vehicle->price * ($endDate->diffInDays($startDate)))
        ];
        session()->put('step-1', array_merge($req,$req1));
        
        return view('extras');
    }
}
