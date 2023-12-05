<?php

namespace App\Http\Controllers;

use App\Models\DataBarber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataBarberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=DataBarber::all();
        return view('dashboard.content.databarber.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.content.databarber.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:5',
            'rating' => 'required',
            'price' => 'required',
            'description' => 'required|min:5',
            'review' => 'required|min:5',
        ]);

        DataBarber::create([
            'name'     => $request->name,
            'rating'   => $request->rating,
            'price' => $request->price,
            'description' => $request->description,
            'review' => $request->review,
        ]);

        return redirect()->route('databarber.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DataBarber::findOrFail($id);

        //render view with post
        return view('databarber.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DataBarber::findOrFail($id);

        //render view with post
        return view('dashboard.content.databarber.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate form
        Validator::make($request->all(),[
            'name' => 'required|min:5',
            'rating' => 'required|min:5',
            'price' => 'required|min:5',
            'description' => 'required|min:5',
            'review' => 'required|min:5',
        ]);

        //get post by ID
        $data = DataBarber::findOrFail($id);
        //update post without image
        $data->update([
            'name'     => $request->name,
            'rating'   => $request->rating,
            'price' => $request->price,
            'description' => $request->description,
            'review' => $request->review,
        ]);

        //redirect to index
        return redirect()->route('databarber.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DataBarber::findOrFail($id);

        //delete post
        $data->delete();

        //redirect to index
        return redirect()->route('databarber.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
