<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use Carbon\Carbon;
use App\Models\ProgramType;

class ProgramController extends Controller
{
    public function index()
    {
        return view('marketing.promo-active.index', [
            'datas' => Program::all(),
            'programTypes' => ProgramType::all(),
            'sidebar' => "promo"
        ]);
    }
    public function store(Request $request)
    {
        $dateStart = Carbon::createFromFormat('m/d/Y', $request->get('start_date'))->format('Y-m-d');
        $dateEnd = Carbon::createFromFormat('m/d/Y', $request->get('end_date'))->format('Y-m-d');
        $validation = $request->validate([
            'program_type_id' => 'required'
        ]);
        $validation['start_date'] = $dateStart;
        $validation['end_date'] = $dateEnd;


        if ($dateEnd < date('Y-m-d')) {
            return redirect()->route('marketing.promo-active.index')->with('failed', 'Promo date Expired!');
        }
        // @dd($data);
        Program::create($validation);
        return redirect()->route('marketing.promo-active.index')->with('success', 'Data added succesfully!');
    }
    public function edit(string $id)
    {

        $data = Program::find($id);
        $dateStart = Carbon::createFromFormat('Y-m-d', $data->start_date)->format('m/d/Y');
        $dateEnd = Carbon::createFromFormat('Y-m-d', $data->end_date)->format('m/d/Y');

        return view('marketing.promo-active.update', [
            'promoActive' => $data,
            'programTypes' => ProgramType::all(),
            'dateStart' => $dateStart,
            'dateEnd' => $dateEnd,
            'sidebar' => 'promo'
        ]);
    }
    public function destroy(string $id)
    {
        Program::destroy('id', $id);
        return redirect()->route('marketing.promo-active.index')->with('success', 'Data added succesfully!');
    }
    public function update(Request $request, string $id)
    {

        $dateStart = Carbon::createFromFormat('m/d/Y', $request->get('start_date'))->format('Y-m-d');
        $dateEnd = Carbon::createFromFormat('m/d/Y', $request->get('end_date'))->format('Y-m-d');
        $validation = $request->validate([
            'program_type_id' => 'required'
        ]);
        $validation['start_date'] = $dateStart;
        $validation['end_date'] = $dateEnd;
        if ($dateEnd < date('Y-m-d')) {
            return redirect()->back()->with('failed', 'Promo date Expired!');
        }
        // @dd($data);
        Program::where('id', $id)->update($validation);
        return redirect()->route('marketing.promo-active.index')->with('success', 'Data updated successfully!');
    }
}
