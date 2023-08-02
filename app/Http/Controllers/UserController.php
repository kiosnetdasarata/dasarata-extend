<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\JobTitle;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::all();
        $data = User::with( 'divisions', 'jobtitle')->orderBy('division_id', 'asc')->get();

        return view('hr.user.index', [
            'data' => $data,
            'employees' => $employee,
            'divisions' => Division::all(),
            'jobtitles' => JobTitle::all(),
        ]);

        // $data = User::whereDoesntHave('employee')->get();
        // return view('hr.user.index', ['data' => $data]);

        
        // $data = User::join('employees', 'users.karyawan_nip', '=', 'nip_pgwi')
        //     ->join('divisions', 'users.division_id', '=', 'divisions.id')
        //     ->join('job_titles', 'users.job_title_id', '=', 'job_titles.id')
        //     ->select('users.*', 'employees.nama', 'divisions.nama_divisi as division_id', 'job_titles.nama_jabatan as job_title_id')
        //     ->get();

        // return view('hr.user.index', ['data' => $data]);



        // $existingUserIds = User::pluck('karyawan_nip')->toArray();

        // $data = employee::whereNotIn('id', $existingUserIds)
        // ->with('divisions', 'jobtitle')
        // ->orderBy('division_id', 'asc')
        // ->get();

        // return view('hr.user.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $data = $request->all();
        
        $hashedPassword = bcrypt($data['password']);
        $data = [
            'karyawan_nip' => $request->get('karyawan_nip'),
            'password' => $hashedPassword,
            'division_id' => $request->division_id,
            'job_title_id' => $request->job_title_id,
            'is_leader' => 1,
        ];
        // dd($data);
        User::create($data);

        return redirect()->route('user.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('user.index');
    }
}
