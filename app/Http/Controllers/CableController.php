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
        $data = [
            'invoices_id' => $invoiceTemporary,
            'merk_kabel' => $request->get('merk_kabel'),
            'jenis_kabel' => $request->get('jenis_kabel'),
            'quantity' => $request->get('kuantitas'),
            'status_kabel' => $request->get('status_kabel')
        ];

        Cable::create($data);
        return redirect()->route('cable.index')->with('success', 'Data saved successfully');
    }
    public function destroy(string $id)
    {

        Cable::destroy('id', $id);
        return redirect()->route('cable.index')->with('success', 'Data deleted successfully');
    }

    public function edit(string $id)
    {
        $cable = Cable::find($id);
        return view('warehouse.cable.update', [
            'cable' => $cable]);
    }
    public function update(Request $request, string $id)
    {
        $data = [
            'merk_kabel' => $request->get('merk_kabel'),
            'jenis_kabel' => $request->get('jenis_kabel'),
            'quantity' => $request->get('kuantitas'),
            'status_kabel' => $request->get('status_kabel')
        ];
        Cable::where('id', $id)->update($data);
        return redirect()->route('cable.index')->with('success', 'Data updated successfully');
    }
}
