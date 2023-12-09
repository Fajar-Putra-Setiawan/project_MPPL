<?php

namespace App\Http\Controllers;

use App\Models\BookingList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book=BookingList::all();
        return view('barberbarometer.booking', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barberbarometer.booking');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'full_name' => 'required|min:5',
            'booking_date' => 'required',
        ]);

        BookingList::create([
            'full_name'     => $request->full_name,
            'booking_date'   => $request->booking_date,
        ]);

        return redirect()->route('index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = BookingList::findOrFail($id);

        //render view with post
        return view('barberbarometer.booking', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
