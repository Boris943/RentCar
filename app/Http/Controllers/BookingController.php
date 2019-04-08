<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\ProcessingRq;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $vehicles=Vehicle::all();
        $nonBookedVehicles=array();
        foreach ($vehicles as $item) {
            if($item->booked==false){
            array_push($nonBookedVehicles,$item);
            }
        }
        
        return view('booking',compact('nonBookedVehicles'));
    }
}
