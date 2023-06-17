@extends('layouts.hr-main')

@section('content')

    <div class="flex">
        <h2 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-3xl dark:text-slate-200 ">List Pegawai</h2>
        <a href="{{ route('employees.create') }}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 ml-auto">Tambah Pegawai</a>
    </div>

    <div class="relative mt-5 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-900 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Telepon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jabatan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Divisi
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
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           {{ $item->nama }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->no_tlpn }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->divisions->nama_divisi}}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->jobtitle->nama_jabatan ?? '' }}
                        </td>
                        <td class="px-6 py-4 flex font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{ url('employees/'.$item->nip_pgwi.'/edit') }}" class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Edit</span></a>
                            <form action="{{ url('employees/'.$item->nip_pgwi) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form>

                            {{-- <a href="{{ url('employees/'.$item->nip_pgwi) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><span>Delete</span>
                            </a> --}}

                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

@endsection
