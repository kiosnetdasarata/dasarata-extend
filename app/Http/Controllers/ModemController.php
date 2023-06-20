<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modem;
use App\Models\ModemType;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ModemController extends Controller
{
    public function store(Request $request)
    {
        $date = Carbon::createFromFormat('m/d/Y', $request->get('modem_masuk'))->format('Y-m-d');
        $invoiceTemporary = mt_rand(1, 3); //invoice Sementara
        $validation = $request->validate([
            'type_id' => 'required',
            'sn_modem' => 'required',
            'karyawan_nip' => 'required',
            'tujuan_out' => 'required'
        ]);
        $validation['modem_masuk'] = $date;
        $validation['invoices_id'] = $invoiceTemporary; 
        // dd($validation);
        Modem::create($validation);
        return redirect()->route('modem-list.index')->with('success', 'Data berhasil disimpan');
    }
    public function index()
    {
        return view('warehouse.modem-list.index', [
            'datas' => Modem::all(),
            'modemTypes' => ModemType::all(),
            'employees' => Employee::all()
        ]);
    }

    public function edit(string $id)
    {
        $modemType = ModemType::all();
        $employee = Employee::all();

        $modem = Modem::find($id);
        $date = Carbon::createFromFormat('Y-m-d', $modem->modem_masuk)->format('m/d/Y');
        return view('warehouse.modem-list.update', [
            'modem' => $modem,
            'modemTypes' => $modemType,
            'employees' => $employee,
            'date' => $date
        ]);
    }
    public function update(string $id, Request $request)
    {

        $date = Carbon::createFromFormat('m/d/Y', $request->get('modem_masuk'))->format('Y-m-d');
        $invoiceTemporary = mt_rand(1, 3); //invoice Sementara
        $validation = $request->validate([
            'type_id' => 'required',
            'sn_modem' => 'required',
            'karyawan_nip' => 'required',
            'tujuan_out' => 'required'
        ]);
        $validation['modem_masuk'] = $date;
        $validation['invoices_id'] = $invoiceTemporary; 

        Modem::where('id', $id)->update($validation);
        return redirect()->route('modem-list.index')->with('success', 'Data updated successfully');
    }

    public function destroy(string $id)
    {
        Modem::destroy('id', $id);
        return redirect()->route('modem-list.index')->with('success', 'Data berhasil dihapus');
    }
}
