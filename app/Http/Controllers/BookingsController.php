<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests\BookRoomRequest;
use App\Room;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function book_room($id)
    {
        $room = Room::findOrFail($id);
        $random = substr(number_format(time() * rand(),0,'',''),0,10);
        
        return view("admin/booking/index")->with("random",$random)->with("room",$room);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRoomRequest $request)
    {
        $data = ([
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "check_in" => $request->check_in,
                "check_out" => $request->check_out,
                "rooms" => $request->rooms,
                "adults" => $request->adults,
                "phone" => $request->phone,
                "body" => $request->body,
                "children" => $request->children,
                "unique_id" => $request->unique_id,
                "room_id" => $request->room_id,
        ]);

        $book = Booking::create($data);
        $id = $book->unique_id;
        session()->flash("success","Room booked succesfully. Please copy the following ID ( ". $id .") to display on arrival at the hotel for further processing. Thank you ");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
