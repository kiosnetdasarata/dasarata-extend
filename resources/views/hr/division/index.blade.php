@extends('layouts.hr-main')

@section('content')

    <div class="flex">
        <h2 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-3xl dark:text-slate-200 ">List Divisi</h2>
    </div>

    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        Tambah Divisi
    </button>

    <div class="relative mt-5 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-900 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Divisi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Pembuatan Divisi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                    @foreach ($data as $data )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->nama_divisi }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->created_at }}
                        </td>
                        <td class="px-6 py-4 flex font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/hr/divisi/update" class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Edit</span></a>
                            <form action="{{ url('division/'.$data->id) }}" method="POST">
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

    @include('hr.division.modal-create')

@endsection
