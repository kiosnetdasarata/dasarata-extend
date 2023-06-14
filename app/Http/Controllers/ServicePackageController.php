<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicePackage;

class ServicePackageController extends Controller
{
    public function index()
    {
        return view('marketing.service-packages.index', [
            'datas' => ServicePackage::all()
        ]);
    }
    public function store(Request $request)
    {
        $data = [
            'nama_layanan' => $request->get('nama_layanan'),
            'harga' => $request->get('harga')
        ];

        ServicePackage::create($data);
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
            'servicePackage' => ServicePackage::find($id)
        ]);
    }
    
    public function update(Request $request, string $id){
        $data = [
            'nama_layanan' => $request->get('nama_layanan'),
            'harga' => $request->get('harga')
        ];

        ServicePackage::where('id', $id)->update($data);
        return redirect()->route('service-packages.index')->with('success', 'Data updated succesfully!');
    }
}
