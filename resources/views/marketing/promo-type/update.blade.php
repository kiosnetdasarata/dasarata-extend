@extends('layouts.marketing-main')

@section('content')
    <div class="px-6 py-6 lg:px-8">
        <h3 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-2xl dark:text-slate-200">
            Ubah Tipe Promo</h3>
        <div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
            <form name="createPromo" action="{{ url('promo-type/'. $promoType->id ) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="nama_promo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Promo</label>
                    <input type="text" id="nama_promo" name="nama_promo"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nama_promo') is-invalid
                @enderror"
                        value="{{ old('nama_promo', $promoType->nama_type_program) }}" placeholder="Nama Paket Layanan" required>
                </div>
                <div class="mb-6">
                    <label for="nominal"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                    <input type="text" id="nominal" name="nominal"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nominal') is-invalid
                @enderror"
                        value="{{ old('nominal', $promoType->nominal) }}" placeholder="nominal" required>
                </div>
                <div class="relative max-w mb-6">
                    <label for="tanggal_dibuat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                        Dibuat</label>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input name="tanggal_dibuat" datepicker type="text" value="{{ old('tanggal_dibuat', $date) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                        placeholder="Pilih Tanggal">
                </div>

                <label for="S_n_K" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Syarat dan
                    Ketentuan</label>
                <textarea id="S_n_K" rows="4" name="S_n_K"
                    class="block p-2.5 mb-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Syarat dan Ketentuan...">{{ old('S_n_K', $promoType->S_n_K) }}</textarea>

                {{-- <div class="mb-6">
                <label for="kuantitas"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kuantitas</label>
                <input type="text" id="kuantitas" name="kuantitas"
                    class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('kuantitas') is-invalid
                @enderror"
                    value="{{ old('kuantitas') }}" placeholder="Kuantitas" required>
            </div> --}}
                <button type="submit"
                    class="focus:outline-none text-slate-100 bg-gray-900 hover:bg-gray-600 focus:ring-2 focus:ring-gray-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-900 dark:hover:bg-gray-600 dark:focus:ring-gray-800">Submit</button>
                <button type="reset"
                    class="ml-2 focus:outline-none hover:bg-gray-300 text-gray-800 bg-gray-200 border-[1px] border-gray-400 focus:ring-2 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:text-white dark:border-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 dark:focus:ring-gray-900">Reset</button>
            </form>
        </div>
    </div>
@endsection
