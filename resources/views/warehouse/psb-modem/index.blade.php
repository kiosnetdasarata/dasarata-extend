@extends('layouts.warehouse-main')

@section('content')

<div class="flex items-center">
    <h2 class="text-2xl font-bold leading-none tracking-tight text-black md:text-3xl dark:text-slate-200 ">Modem PSB</h2>
    {{-- <a href="#" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 ml-auto">Tambah</a> --}}
</div>
<div class="flex mt-3 max-w-xl h-auto">
    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:bg-gray-900 dark:hover:bg-gray-600 dark:focus:ring-gray-800" type="button">
        Input Modem PSB
    </button>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-900 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Serial Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Out Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data) --}}
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </td>
                <td scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $data->modems_sn }}
                </td>
                <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $data->date_out}}
                </td>
                {{-- <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $data->harga_modem }}
                </td> --}}
                <td class="px-6 py-4 flex font-normal whitespace-nowrap dark:text-white">
                    <a href="/hr/jabatan/update" class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Edit</span></a>
                    <form action="{{ url('job-title/'.$data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                    </form>
                    {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Delete</span></a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- @include('hr.job-title.modal-create') --}}

@endsection
