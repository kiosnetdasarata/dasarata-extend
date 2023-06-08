<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModemType;

class ModemTypeController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'merk_modem' => 'required',
            'versi_modem' => 'required',
            'harga_modem' => 'required'
        ]);
        ModemType::create($validate);
        return redirect()->route('modem-type.index')->with('success', 'Data saved successfully');
    }
    public function index()
    {
        return view('warehouse.modem-type.index', [
            'datas' => ModemType::all()
        ]);
    }
    public function destroy(string $id)
    {

        // @dd($id);
        ModemType::destroy('id', $id);
        return redirect()->route('modem-type.index')->with('success', 'Data deleted successfully');
    }

    public function edit(string $id)
    {
        $modemType = ModemType::find($id);
        return view('warehouse.modem-type.update', [
            'modemType' => $modemType
        ]);
    }

    public function update(string $id, Request $request)
    {
        $data = [
          'merk_modem' => $request->get('merk_modem'),
          'versi_modem' => $request->get('versi_modem'),
          'harga_modem' => $request->get('harga_modem')
        ];

        ModemType::where('id', $id)->update($data);
        return redirect()->route('modem-type.index')->with('success', 'Data updated successfully');
    }
}