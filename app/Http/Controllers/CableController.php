<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cable;

class CableController extends Controller
{
    public function index()
    {
        return view('warehouse.cable.index', [
            "datas" => Cable::all()
        ]);
    }
    public function store(Request $request)
    {
        $invoiceTemporary = mt_rand(1, 3);
        $validation = $request->validate([
            'merk_kabel' => 'required',
            'jenis_kabel' => 'required',
            'quantity' => 'required|integer',
            'status_kabel' => 'required'
        ]);
        $validation['invoices_id'] = $invoiceTemporary;
        // dd($validation);


        Cable::create($validation);
        return redirect()->route('warehouse.cable.index')->with('success', 'Data saved successfully');
    }
    public function destroy(string $id)
    {

        Cable::destroy('id', $id);
        return redirect()->route('warehouse.cable.index')->with('success', 'Data deleted successfully');
    }

    public function edit(string $id)
    {
        $cable = Cable::find($id);
        return view('warehouse.cable.update', [
            'cable' => $cable
        ]);
    }
    public function update(Request $request, string $id)
    {
        $invoiceTemporary = mt_rand(1, 3);
        $validation = $request->validate([
            'merk_kabel' => 'required',
            'jenis_kabel' => 'required',
            'quantity' => 'required|integer',
            'status_kabel' => 'required'
        ]);
        $validation['invoices_id'] = $invoiceTemporary;

        Cable::where('id', $id)->update($validation);
        return redirect()->route('warehouse.cable.index')->with('success', 'Data updated successfully');
    }
}
