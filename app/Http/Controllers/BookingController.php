<?php

namespace App\Http\Controllers;

use App\Extras;
use App\Vehicle;
use Carbon\Carbon;
use App\ProcessingRq;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        request()->validate([
            "pick_up_location" => "required",
            "pick_up_date" => "required",
            "pick_up_time" => "required",
            "drop_off_location" => "required",
            "drop_off_date" => "required",
            "drop_off_time" => "required",
        ]);

        $req = [
            "pick_up_location" => request("pick_up_location"),
            "pick_up_date" => request("pick_up_date"),
            "pick_up_time" => request("pick_up_time"),
            "drop_off_location" => request("drop_off_location"),
            "drop_off_date" => request("drop_off_date"),
            "drop_off_time" => request("drop_off_time"),
        ];

        session()->put('step-1', $req);

        return redirect('/booking');
    }

    public function booking()
    {
        $nonBookedVehicles = Vehicle::query()->where('booked', false)->get();

        return view('booking', compact('nonBookedVehicles'));
    }

    public function step1($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        $vehicle->update([
            "booked" => true
        ]);

        $req = session()->get('step-1');

        $startDate = Carbon::parse($req['pick_up_date']);
        $endDate = Carbon::parse($req['drop_off_date']);

        $req1 = [
            "car_id" => $vehicle->id,
            "sum_price" => ($vehicle->price * ($endDate->diffInDays($startDate)))
        ];
        session()->put('step-1', array_merge($req, $req1));

        return redirect('/extras');
    }

    public function extras()
    {
        $ext = Extras::all();
                   
        return view('extras', compact("ext"));
    }

    public function step2()
    {
        $req = session()->get('step-1');

        $startDate = Carbon::parse($req['pick_up_date']);
        $endDate = Carbon::parse($req['drop_off_date']);

        $result = $endDate->diffInDays($startDate);
        
        $additions= Extras::find(request()->get("extras"));

        $req["sum_price"] = $req["sum_price"] + $result * $additions->map->price->sum();
        $req["extras"] = $additions->map->id;
        
        session()->put('step-1', $req);

        return redirect('/personalinfo');
    }

    public function personalInfo()
    {
        return view('personalinfo');
    }

    public function stepfin()
    {
        request()->validate([
            "full_name" => "required",
            "age" => "required|gte:20",
            "email" => "required|email",
            "phone_num" => "required",
            "country" => "required"
        ]);

        $req = session()->get('step-1');

        $procReq = ProcessingRq::create([
            "pick_up_location" => $req["pick_up_location"],
            "pick_up_date" => $req["pick_up_date"],
            "pick_up_time" => $req["pick_up_time"],
            "drop_off_location" => $req["drop_off_location"],
            "drop_off_date" => $req["drop_off_date"],
            "drop_off_time" => $req["drop_off_time"],
            "car_id" => $req["car_id"],
            "sum_price" => $req["sum_price"],
            "full_name" => request("full_name"),
            "age" => (int)request("age"),
            "email" => request("email"),
            "phone_num" => request("phone_num"),
            "country" => request("country"),
            "message" => request("message")
        ]);

        $procReq->extras()->sync($req["extras"]);

        return redirect('/');
    }
}
