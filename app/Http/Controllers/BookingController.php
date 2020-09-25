<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::latest()->paginate(5);
        return view('pages.booking_list',compact('booking'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.booking_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact_number'=> 'required',
            'event_name'=> 'required',
            'event_date'=> 'required',
            'event_location'=> 'required',
            'package'=> 'required',
            'status'=> 'required'
        ]);
  
        Booking::create($request->all());
   
        return redirect()->route('booking_list')
                        ->with('success','Event booking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */

    public $bid;
    public function show($bid)
    {
        $booking = booking :: where ('booking_id', $bid) -> first();

        return view('pages.booking_show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($bid)
    {
        $booking = booking :: where ('booking_id', $bid) -> first();
        return view('pages.booking_edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'booking_id' => 'required',
            'name' => 'required',
            'contact_number'=> 'required',
            'event_name'=> 'required',
            'event_date'=> 'required',
            'event_location'=> 'required',
            'package'=> 'required',
            'status'=> 'required'
        ]);
            
        $booking = booking :: find ($request->get('booking_id')) ;
        dd($booking);
        $booking->name =  $request->get('name');
        $booking->contact_number =  $request->get('contact_number');
        $booking->event_name =  $request->get('event_name');
        $booking->event_date =  $request->get('event_date');
        $booking->event_location =  $request->get('event_location');
        $booking->package =  $request->get('package');
        $booking->status =  $request->get('status');
        
        $booking->save();
        
        return redirect()->route('booking_list')
                        ->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($bid)
    {
        $booking = booking :: where ('booking_id', $bid);
        $booking->delete();
  
        return redirect()->route('booking_list')
                        ->with('success','Event deleted successfully');
    }
}
