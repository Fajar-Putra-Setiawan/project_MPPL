<?php

namespace App\Http\Controllers;

use App\Models\BookingList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking=BookingList::all();
        return view('dashboard.content.bookinglist.index', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.content.bookinglist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'full_name' => 'required|min:5',
            'booking_date' => 'required',
        ]);

        BookingList::create([
            'full_name'     => $request->full_name,
            'booking_date'   => $request->booking_date,
        ]);

        return redirect()->route('bookinglist.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking = BookingList::findOrFail($id);

        //render view with post
        return view('dashboard.content.bookinglist.edit', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $booking = BookingList::findOrFail($id);

        //render view with post
        return view('dashboard.content.bookinglist.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //validate form
         Validator::make($request->all(),[
            'full_name' => 'required|min:5',
            'booking_date' => 'required',
        ]);

        //get post by ID
        $booking = BookingList::findOrFail($id);


        //update post without image
        $booking->update([
            'full_name'     => $request->full_name,
            'booking_date'   => $request->booking_date,
        ]);

        //redirect to index
        return redirect()->route('bookinglist.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = BookingList::findOrFail($id);

        //delete post
        $booking->delete();

        //redirect to index
        return redirect()->route('bookinglist.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
