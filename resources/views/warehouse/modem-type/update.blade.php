@extends('layouts.warehouse-main')

@section('content')
<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
    <div class="px-6 py-6 lg:px-8">
      <h3 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-2xl dark:text-slate-200">Input Modem Type</h3>
      <div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
        <form name="updateModemType" action="{{ url('modem-type/'. $modemType->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-6">
                    <label for="merk_modem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merk Modem</label>
                    <input type="text" id="merk_modem" name="merk_modem" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('merk_modem') is-invalid
                    @enderror" value="{{ old('merk_modem', $modemType->merk_modem) }}" placeholder="Merk Modem" required>
                    @error('merk_modem')
                        <div class="invalid-feedback text-red-600">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="versi_modem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Versi Modem</label>
                    <input type="text" id="versi_modem" name="versi_modem" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('versi_modem') is-invalid
                    @enderror" value="{{ old('versi_modem', $modemType->versi_modem) }}" placeholder="Versi Modem" required>
                    @error('versi_modem')
                        <div class="invalid-feedback text-red-600">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="harga_modem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Modem</label>
                    <input type="text" id="harga_modem" name="harga_modem" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('harga_modem') is-invalid
                    @enderror" value="{{ old('harga_modem', $modemType->harga_modem) }}" placeholder="Harga Modem" required>
                    @error('harga_modem')
                        <div class="invalid-feedback text-red-600">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="focus:outline-none text-slate-100 bg-gray-900 hover:bg-gray-600 focus:ring-2 focus:ring-gray-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-900 dark:hover:bg-gray-600 dark:focus:ring-gray-800">Submit</button>
                <button type="reset" class="ml-2 focus:outline-none hover:bg-gray-300 text-gray-800 bg-gray-200 border-[1px] border-gray-400 focus:ring-2 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:text-white dark:border-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 dark:focus:ring-gray-900">Reset</button>
        </form>
      </div>
    </div>
</div>
@endsection