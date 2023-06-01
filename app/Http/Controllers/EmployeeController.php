<?php

namespace App\Http\Controllers;

use App\Models\Employee;

use App\Models\Province;
use App\Models\Regencie;
use App\Models\District;
use App\Models\Village;

use App\Models\Division;
use App\Models\JobTitle;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Employee::orderBy('nama','asc')->get();
        return view('hr.employee.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $provinces = Province::all();
        $regencies = Regencie::all();
        $districts = District::all();
        $villages = Village::all();

        $divisions = Division::all();
        $job_titles = JobTitle::all();

        return view('hr.employee.create', compact('provinces','regencies','districts','villages','divisions','job_titles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = [
        //     'nama'=>$request->nama,
        //     'no_tlpn'=>$request->no_tlpn,
        //     'nik'=>$request->nik,
        //     'tempat_lahir'=>$request->tempat_lahir,
        //     'tgl_lahir'=>$request->tgl_lahir,
        //     'jk'=>$request->jk,
        //     'almt_detail'=>$request->almt_detail,
        //     'province_id'=>$request->province_id,
        //     'regencie_id'=>$request->regencie_id,
        //     'district_id'=>$request->district_id,
        //     'village_id'=>$request->village_id,
        //     'agama'=>$request->agama,
        //     'status_perkawinan'=>$request->status_perkawinan,
        //     'pendidikan_terakhir'=>$request->pendidikan_terakhir,
        //     'nama_instansi'=>$request->nama_instansi,
        //     'tahun_lulus'=>$request->tahun_lulus,
        //     'divisi_id'=>$request->divisi_id,
        //     'jabatan_id'=>$request->jabatan_id,

        // ];

        // Employee::create($data);
            
             
        

        // $validateData = $request->validate(([
        //     'nama' => 'nama',
        //     'no_tlpn' => 'no_tlpn',
        //     'nik' => 'nik',
        //     'tempat_lahir' => 'tempat_lahir',
        //     'jk' => 'jk',
        //     'almt_detail' => 'almt_detail',
        //     'province_id' => 'province_id',
        //     'regencie_id' => 'regencie_id',
        //     'district_id' => 'district_id',
        //     'village_id' => 'village_id',
        //     'agama' => 'agama',
        //     'status_perkawinan' => 'status_perkawinan',
        //     'pendidikan_terakhir' => 'pendidikan_terakhir',
        //     'nama_instansi' => 'nama_instansi',
        //     'tahun_lulus' => 'tahun_lulus',
        //     'divisi_id' => 'divisi_id',
        //     'jabatan_id' => 'jabatan_id',


        // ]));

        // Employee::create($validateData);
        


        Employee::create($request->all());

        return redirect()->route('employees.index')->with('berhasil','pegawai berhasil diinput');

       
        
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
        $provinces = Province::all();
        $regencies = Regencie::all();
        $districts = District::all();
        $villages = Village::all();

        $divisions = Division::all();
        $job_titles = JobTitle::all();

        $data = Employee::where('nip_pgwi',$id)->first();

        return view('hr.employee.update',['data'=>$data, 'provinces'=>$provinces,'regencies'=>$regencies,'districts'=>$districts,'villages'=>$villages,'divisions'=>$divisions,'job_titles'=>$job_titles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $data = [
            'nama'=>$request->nama,
            'no_tlpn'=>$request->no_tlpn,
            'nik'=>$request->nik,
            'tempat_lahir'=>$request->tempat_lahir,
            'tgl_lahir'=>$request->tgl_lahir,
            'jk'=>$request->jk,
            'almt_detail'=>$request->almt_detail,
            'province_id'=>$request->province_id,
            'regencie_id'=>$request->regencie_id,
            'district_id'=>$request->district_id,
            'village_id'=>$request->village_id,
            'agama'=>$request->agama,
            'status_perkawinan'=>$request->status_perkawinan,
            'pendidikan_terakhir'=>$request->pendidikan_terakhir,
            'nama_instansi'=>$request->nama_instansi,
            'tahun_lulus'=>$request->tahun_lulus,
            'divisi_id'=>$request->divisi_id,
            'jabatan_id'=>$request->jabatan_id,

        ];

        Employee::where('nip_pgwi',$id)->update($data);
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::where('nip_pgwi',$id)->delete();
        return redirect()->route('employees.index');
    }
}
