@extends('layouts.warehouse-main')

@section('content')
    @if (session()->has('success'))
        <div id="alert-1" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif
    <div class="flex items-center">
        <h2 class="text-2xl font-bold leading-none tracking-tight text-black md:text-3xl dark:text-slate-200 ">Distibutor/Seller
        </h2>
        {{-- <a href="#" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 ml-auto">Tambah</a> --}}
    </div>
    <div class="flex mt-3 max-w-xl h-auto">
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white dark:bg-gray-900 dark:hover:bg-gray-600 dark:focus:ring-gray-800" type="button">
            Input Distributor/Seller
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
                        Nama Penjual
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No. Telepon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Penjual
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->nama_penjual }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->alamat_penjual }}
                        </td>
                        <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->no_telepon }}
                        </td>
                        <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $data->jenis_penjual }}
                        </td>
                        <td class="px-6 py-4 flex font-normal whitespace-nowrap dark:text-white">
                            <a href="{{ 'warehouse/seller/'.$data->id.'/edit' }}"
                                class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Edit</span></a>
                            <form action="{{ url('warehouse/seller/'.$data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form>
                            {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Delete</span></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- @include('warehouse.modem-list.modal-create') --}}
@endsection
