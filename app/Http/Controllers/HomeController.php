<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\ProcessingRq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addCar()
    {
        return view('addCar');
    }

    public function storeCar()
    {
        request()->validate([
            'car_name'=>'required',
            'type'=>'required',
            'luggage'=>'required',
            'doors'=>'required',
            'seats'=>'required',
            'transmission'=>'required',
            'fuel'=>'required',
            'price'=>'required'
        ]);
        
        Vehicle::Create([
            'car_name'=>request('car_name'),
            'type'=>request('type'),
            'luggage'=>(int)request('luggage'),
            'doors'=>(int)request('doors'),
            'seats'=>(int)request('seats'),
            'transmission'=>request('transmission'),
            'fuel'=>request('fuel'),
            'ac'=>(boolean)request('ac'),
            'price'=>(double)request('price'),
            ]);

            return redirect('home');
    }
    public function showCar()
    {
        $vehicles=Vehicle::all();
        return view('listCar',compact('vehicles'));
    }
    
    public function editCar($id)
    {   
        $vehicle=Vehicle::findOrFail($id);
        
        return view('updateCar',compact('vehicle'));
    }
    
    public function updateCar($id)
    {   
            request()->validate([
                'car_name'=>'required',
                'type'=>'required',
                'luggage'=>'required',
                'doors'=>'required',
                'seats'=>'required',
                'transmission'=>'required',
                'fuel'=>'required',
                'booked'=>'required',
                'price'=>'required'
            ]);
            
        Vehicle::findOrFail($id)->update([
            'car_name'=>request('car_name'),
            'type'=>request('type'),
            'luggage'=>(int)request('luggage'),
            'doors'=>(int)request('doors'),
            'seats'=>(int)request('seats'),
            'transmission'=>request('transmission'),
            'fuel'=>request('fuel'),
            'ac'=>(boolean)request('ac'),
            'booked'=>(boolean)request('booked'),
            'price'=>(double)request('price'),
            ]);

        return redirect('/home/listCar');
    }
    
    public function destroyCar($id)
    {
       Vehicle::findOrFail($id)->delete();
       return back();
    }

    public function reqlist()
    {   
        $req=ProcessingRq::all();
        return view('listReq',compact('req'));
    }
    
    public function approved($id)
    {
        ProcessingRq::findOrFail($id)->update([
            "status"=>"Aktivan"
        ]);
        return back();
    }
    
    public function deny($id)
    {
        $req=ProcessingRq::findOrFail($id);
        Vehicle::findOrFail($req->car_id)->update([
            "booked"=>false
        ]);
        $req->update([
            "status"=>"Odbijen"
        ]);
        return back();
    }
    
    public function detailedview($id)
    {
        $req=ProcessingRq::findOrFail($id);
        return view('detailedInfo',compact("req"));
    }
    
}
