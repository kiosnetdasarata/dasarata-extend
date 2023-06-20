<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicePackage;

class ServicePackageController extends Controller
{
    public function index()
    {
        return view('marketing.service-packages.index', [
            'datas' => ServicePackage::all(),
            'sidebar' => "paketlayanan"
        ]);
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_layanan' => 'required|min:3|max:100',
            'harga' => 'required|integer'
        ]);

        ServicePackage::create($validation);
        return redirect()->route('service-packages.index')->with('success', 'Data saved succesfully!');
    }

    public function destroy(string $id)
    {

        ServicePackage::destroy('id', $id);
        return redirect()->route('service-packages.index')->with('success', 'Data deleted succesfully!');
    }

    public function edit(string $id)
    {
        return view('marketing.service-packages.update', [
            'servicePackage' => ServicePackage::find($id),
            'sidebar' => 'paketlayanan'
        ]);
    }
    
    public function update(Request $request, string $id){
        $validation = $request->validate([
            'nama_layanan' => 'required|min:3|max:100',
            'harga' => 'required|integer'
        ]);

        ServicePackage::where('id', $id)->update($validation);
        return redirect()->route('service-packages.index')->with('success', 'Data updated succesfully!');
    }
}
