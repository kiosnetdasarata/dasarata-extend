<?php

namespace App\Http\Controllers;

use App\Models\Pole;
use Illuminate\Http\Request;

class PoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warehouse.pole.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $lastRow = Pole::orderBy('tiang_ke', 'DESC')->first();
        $jml_tiang = $request->get('tiang');
        if ($lastRow) {
        $lastNum = $lastRow->tiang_ke;
            for ($i = 1; $i <= $jml_tiang; $i++) {
                $data = [
                    'tiang_ke' => $lastNum + 1,
                    'ukuran_tiang' => $request->get('ukuran'),
                    'ketebalan_tiang' => $request->get('ketebalan'),
                    'tinggi_tiang' => $request->get('tinggi'),
                    'vendor' => $request->get('vendor'),
                    'harga' => $request->get('harga')
                ];
                Pole::create($data);
                $lastNum++;
            }
        } else {
            for ($i = 1; $i <= $jml_tiang; $i++) {
                $data = [
                    'tiang_ke' => $i,
                    'ukuran_tiang' => $request->get('ukuran'),
                    'ketebalan_tiang' => $request->get('ketebalan'),
                    'tinggi_tiang' => $request->get('tinggi'),
                    'vendor' => $request->get('vendor'),
                    'harga' => $request->get('harga')
                ];
                Pole::create($data);
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Pole $pole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pole $pole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pole $pole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pole $pole)
    {
        //
    }
}
