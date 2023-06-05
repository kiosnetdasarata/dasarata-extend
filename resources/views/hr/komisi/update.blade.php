@extends('layouts.hr-main')

@section('content')

    <form name="updateKomisi" action="{{ url('komisi/'.$data->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-6">
            <label for="level_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <select id="level_id" name="level_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Level--</option>
                @foreach ($levels as $item)
                <option value ="{{ $item->id }}" {{ old('level_id', $data->level_id) ==$item->id ? 'selected' : null }}>{{ $item->nama_level }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="noiminal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimum Rentang</label>
            <input name="nominal" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('nominal') is-invalid
            @enderror" value="{{ $data->nominal }}" id="nominal" type="number" placeholder="nominal">
        </div>
        <div class="mb-6">
            <label for="max_rentang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimum Rentang</label>
            <input name="max_rentang" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('max_rentang') is-invalid
            @enderror" value="{{ $data->max_rentang }}" id="max_rentang" type="number" placeholder="Minimum Rentang">
        </div>
        <div class="mb-6">
            <label for="min_rentang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimum Rentang</label>
            <input name="min_rentang" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('min_rentang') is-invalid
            @enderror" value="{{ $data->min_rentang }}" id="min_rentang" type="number" placeholder="Minimum Rentang">
        </div>
        <button type="submit" class="focus:outline-none text-slate-100 bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-puple-600 dark:hover:bg-purple-700 dark:focus:ring-green-800">Submit</button>
        <button type="reset" class="ml-2 focus:outline-none text-gray-800 bg-gray-200 border-2 border-gray-400 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:text-white dark:bg-gray-500 border-2 border-gray-700 dark:hover:bg-gray-600 dark:focus:ring-grau-900">Reset</button>

    </form>

@endsection
