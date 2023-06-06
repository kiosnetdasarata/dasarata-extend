<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\Level;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::all();
        
        $data = Commission::orderBy('nominal','asc')->get();
        return view('hr.komisi.index',['data' => $data, 'levels' => $levels]);
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
        Commission::create($request->all());

        return redirect()->route('komisi.index');
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
        $data = Commission::where('id', $id)->first();
        $levels = Level::all();

        return view('hr.komisi.update', ['data' => $data, 'levels' => $levels]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = [
            'level_id'=>$request->level_id,
            'nominal' =>$request->nominal,
            'max_rentang' =>$request->max_rentang,
            'min_rentang' =>$request->min_rentang

        ];

        Commission::where('id',$id)->update($data);
        return redirect()->route('komisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Commission::where('id', $id)->delete();
        return redirect()->route('komisi.index');
    }
}
