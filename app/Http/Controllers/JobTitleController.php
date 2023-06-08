<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\JobTitle;




use Illuminate\Http\Request;

class JobTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::all();
        $data = JobTitle::orderBy('nama_jabatan', 'asc')->get();

        return view('hr.job-title.index', ['data' => $data, 'divisions' => $divisions]);

        // return view('hr.job-title.index')->with('divisions','data', $data, $divisions);
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
        // dd($request->all());
        JobTitle::create($request->all());

        return redirect()->route('job-title.index');
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
        JobTitle::where('id', $id)->delete();
        return redirect()->route('job-title.index');
    }
}
