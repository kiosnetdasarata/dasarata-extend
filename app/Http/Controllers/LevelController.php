<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Level::orderBy('nama_level','asc')->get();
        return view('hr.level.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Level::create($request->all());

        return redirect()->route('level.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Level::where('id', $id)->first();

        return view('hr.level.update', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = [
            'nama_level' => $request->nama_level,
            'minimum_closing' => $request->minimum_closing,
        ];

        Level::where('id', $id)->update($data);
        return redirect()->route('level.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Level::where('id',$id)->delete();
        return redirect()->route('level.index');
    }
}
