@extends('layouts.warehouse-main')

@section('content')
    <div class="px-6 py-6 lg:px-8">
        <h3 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-2xl dark:text-slate-200">Edit Kabel</h3>
        <div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
            <form name="createCable" action="{{ url('cable/'.$cable->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="merk_kabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merk
                        Kabel</label>
                    <input type="text" id="merk_kabel" name="merk_kabel"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('merk_kabel') is-invalid
                  @enderror"
                        value="{{old('merk_kabel', $cable->merk_kabel)}}" placeholder="Merk Kabel">
                </div>
                <div class="mb-6">
                    <label for="jenis_kabel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Kabel</label>
                    <input type="text" id="jenis_kabel" name="jenis_kabel"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('jenis_kabel') is-invalid
                  @enderror"
                        value="{{ old('jenis_kabel', $cable->jenis_kabel) }}" placeholder="Jenis Kabel" required>
                </div>
                <div class="mb-6">
                    <label for="kuantitas"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kuantitas</label>
                    <input type="text" id="kuantitas" name="kuantitas"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('kuantitas') is-invalid
                  @enderror"
                        value="{{ old('kuantitas', $cable->quantity) }}" placeholder="Kuantitas" required>
                </div>
                <div class="mb-6">
                    <label for="status_kabel"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="status_kabel" name="status_kabel"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="{{ 1 }}" @if($cable->status_kabel == 1) selected @endif>Ready</option>
                        <option value="{{ 0 }}" @if($cable->status_kabel == 0) selected @endif>Not Ready</option>
                    </select>
                </div>
                <button type="submit"
                    class="focus:outline-none text-slate-100 bg-gray-900 hover:bg-gray-600 focus:ring-2 focus:ring-gray-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-900 dark:hover:bg-gray-600 dark:focus:ring-gray-800">Submit</button>
                <button type="reset"
                    class="ml-2 focus:outline-none hover:bg-gray-300 text-gray-800 bg-gray-200 border-[1px] border-gray-400 focus:ring-2 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:text-white dark:border-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 dark:focus:ring-gray-900">Reset</button>
            </form>
        </div>
    </div>
@endsection
