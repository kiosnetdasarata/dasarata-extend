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
        $validation = $request->validate([
            'nama_type_program' => 'required|min:3|max:100',
            'nominal' => 'required',
            's_n_k' => 'required|min:3|max:255'
        ]);
        $validation['tanggal_dibuat'] = $date;
        // dd($validation);
        ProgramType::create($validation);
        return redirect()->route('marketing.promo-type.index')->with('success', 'Data saved succesfully!');
    }

    public function destroy(string $id)
    {
        ProgramType::destroy('id', $id);
        return redirect()->route('marketing.promo-type.index')->with('success', 'Data deleted succesfully!');
    }
    public function edit(string $id)
    {
        $promoType = ProgramType::find($id);
        $date = Carbon::createFromFormat('Y-m-d', $promoType->tanggal_dibuat)->format('m/d/Y');
        return view('marketing.promo-type.update', [
            'promoType' => $promoType,
            'date' => $date
        ]);
    }
    public function update(Request $request, string $id)
    {
        $date = Carbon::createFromFormat('m/d/Y', $request->get('tanggal_dibuat'))->format('Y-m-d');
        $validation = $request->validate([
            'nama_type_program' => 'required|min:3|max:100',
            'nominal' => 'required',
            'S_n_K' => 'required|min:3|max:255'
        ]);
        $validation['tanggal_dibuat'] = $date;
        // @dd($validation);
        ProgramType::where('id', $id)->update($validation);
        return redirect()->route('marketing.promo-type.index')->with('success', 'Data updated succesfully!');
    }
}
