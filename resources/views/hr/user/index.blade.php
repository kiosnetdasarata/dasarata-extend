@extends('layouts.hr-main')
@section('content')

<div class="flex items-center">
    <h2 class="text-2xl font-bold leading-none tracking-tight text-black md:text-3xl dark:text-slate-200 ">User</h2>
    <a data-modal-target="user-modal" data-modal-toggle="user-modal" class="ml-2 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 ml-auto">Tambah</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-900 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                {{-- <th scope="col" class="px-6 py-3">
                    NIP
                </th> --}}
                <th scope="col" class="px-6 py-3">
                    Divisi
                </th>
                <th scope="col" class="px-6 py-3">
                    Jabatan
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </td>
                <td scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->employee->nama}}
                </td>
                {{-- <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->karyawan_nip }}
                </td> --}}
                <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->divisions->nama_divisi }}
                </td>
                <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $item->employee->jobtitle->nama_jabatan }}
                </td>
                <td class="px-6 py-4 font-normal whitespace-nowrap dark:text-white">
                    <a href="/hr/user/update" class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Edit</span></a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Delete</span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('hr.user.create')
@endsection
