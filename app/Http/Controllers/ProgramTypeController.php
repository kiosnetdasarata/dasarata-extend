<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramType;
use Carbon\Carbon;

class ProgramTypeController extends Controller
{
    public function index()
    {
        return view('marketing.promo-type.index', [
            'datas' => ProgramType::all(),
            'sidebar' => 'promo'
        ]);
    }

    public function store(Request $request)
    {
        $date = Carbon::createFromFormat('m/d/Y', $request->get('tanggal_dibuat'))->format('Y-m-d');
        $data = [
            'nama_type_program' => $request->get('nama_promo'),
            'nominal' => $request->get('nominal'),
            'tanggal_dibuat' => $date,
            'S_n_K' => $request->get('S_n_K')
        ];
        ProgramType::create($data);
        return redirect()->route('promo-type.index')->with('success', 'Data saved succesfully!');
    }

    public function destroy(string $id)
    {

        ProgramType::destroy('id', $id);
        return redirect()->route('promo-type.index')->with('success', 'Data deleted succesfully!');
    }
    public function edit(string $id)
    {
        $promoType = ProgramType::find($id);
        $date = Carbon::createFromFormat('Y-m-d', $promoType->tanggal_dibuat)->format('m/d/Y' );
        return view('marketing.promo-type.update', [
            'promoType' => $promoType,
            'date' => $date
        ]);
    }
    public function update(Request $request, string $id)
    {
        $date = Carbon::createFromFormat('m/d/Y', $request->get('tanggal_dibuat'))->format('Y-m-d');
        $data = [
            'nama_type_program' => $request->get('nama_promo'),
            'nominal' => $request->get('nominal'),
            'tanggal_dibuat' => $date,
            'S_n_K' => $request->get('S_n_K')
        ];
        // @dd($data);
        ProgramType::where('id', $id)->update($data);
        return redirect()->route('promo-type.index')->with('success', 'Data updated succesfully!');
    }
}
