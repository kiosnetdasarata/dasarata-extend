@extends('layouts.hr-main')

@section('content')

    <div class="flex">
        <h2 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-3xl dark:text-slate-200 ">List Level Sales</h2>
        <a href="#" data-modal-target="level-modal" data-modal-toggle="level-modal" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 ml-auto">Tambah Level</a>
    </div>

    <form name="updateLevelSales" action="#" method="post">
        @csrf
            <div class="mb-6">
                <label for="namalevel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Level</label>
                <input type="text" id="namalevel" name="namalevel" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('namalevel') is-invalid
                @enderror" value="{{ old('namalevel') }}" placeholder="Nama Level">
                <div class="invalid-feedback text-gray-900 dark:text-white">
                </div>
            </div>
            <div class="mb-6">
                <label for="minclosing" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimum Closing</label>
                <input type="number" id="minclosing" name="minclosing" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('minclosing') is-invalid
                @enderror" value="{{ old('minclosing') }}" placeholder="Minimum Closing">
                <div class="invalid-feedback text-gray-900 dark:text-white">
                </div>
            </div>
            <button type="submit" class="focus:outline-none text-slate-100 bg-purple-600 hover:bg-purple-700 focus:ring-2 focus:ring-purple-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-puple-600 dark:hover:bg-purple-700 dark:focus:ring-green-800">Update</button>
            <button type="reset" class="ml-2 focus:outline-none hover:bg-gray-300 text-gray-800 bg-gray-200 border-[1px] border-gray-400 focus:ring-2 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:text-white dark:border-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 dark:focus:ring-gray-900">Reset</button>
    </form>

@endsection
