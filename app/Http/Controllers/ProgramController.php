<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Carbon\Carbon;
use App\Models\ProgramType;

class ProgramController extends Controller
{
    public function index(){
        return view('marketing.promo-active.index', [
            'datas' => Program::all(),
            'programTypes' => ProgramType::all()
        ]);
    }
    public function store(Request $request){

        $dateStart = Carbon::createFromFormat('m/d/Y', $request->get('tanggal_mulai'))->format('Y-m-d');
        $dateEnd = Carbon::createFromFormat('m/d/Y', $request->get('tanggal_selesai'))->format('Y-m-d');
        $data = [
            'program_type_id' => $request->get('promo_id'),
            'tanggal_mulai' => $dateStart,
            'tanggal_selesai' => $dateEnd
        ];
        if($dateEnd < date('Y-m-d')){
            return redirect()->route('promo-active.index')->with('failed', 'Promo date Expired!');
        }
        // @dd($data);
        Program::create($data);
        return redirect()->route('promo-active.index')->with('success', 'Data added succesfully!');
    }
    public function edit(string $id){
        
        $data = Program::find($id);
        $dateStart = Carbon::createFromFormat('Y-m-d', $data->tanggal_mulai)->format('m/d/Y');
        $dateEnd = Carbon::createFromFormat('Y-m-d', $data->tanggal_selesai)->format('m/d/Y');

        return view('marketing.promo-active.update', [
            'promoActive' => $data,
            'programTypes' => ProgramType::all(),
            'dateStart' => $dateStart,
            'dateEnd' => $dateEnd
        ]);
    }
    public function destroy(string $id){
        Program::destroy('id', $id);
        return redirect()->route('promo-active.index')->with('success', 'Data added succesfully!');
    }
    public function update(Request $request, string $id){

        $dateStart = Carbon::createFromFormat('m/d/Y', $request->get('tanggal_mulai'))->format('Y-m-d');
        $dateEnd = Carbon::createFromFormat('m/d/Y', $request->get('tanggal_selesai'))->format('Y-m-d');
        $data = [
            'program_type_id' => $request->get('promo_id'),
            'tanggal_mulai' => $dateStart,
            'tanggal_selesai' => $dateEnd
        ];
        if($dateEnd < date('Y-m-d')){
            return redirect()->back()->with('failed', 'Promo date Expired!');
        }
        // @dd($data);
        Program::where('id', $id)->update($data);
        return redirect()->route('promo-active.index')->with('success', 'Data updated successfully!');
    }
}