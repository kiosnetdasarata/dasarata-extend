@extends('layouts.warehouse-main')

@section('content')
<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
    <div class="px-6 py-6 lg:px-8">
      <h3 class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-2xl dark:text-slate-200">Input Modem</h3>
      <div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
        <form name="editModem" action="{{ url('warehouse/modem-list/'.$modem->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-6">
                    <label for="type_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Versi Modem</label>
                        <select id="type_id" name="type_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('type_id') is-invalid
                        @enderror">
                            @foreach ($modemTypes as $modemType)
                            <option value ="{{ $modemType->id }}" @if($modemType->id === $modem->type_id) selected @endif>{{ $modemType->versi_modem }}</option>
                            @endforeach
                    </select>
                    @error('type_id')
                                <div class="invalid-feedback text-red-600">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                </div>
                <div class="mb-6">
                    <label for="sn_modem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial Number</label>
                    <input type="text" id="sn_modem" name="sn_modem" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('sn_modem') is-invalid
                    @enderror" value="{{ old('sn_modem', $modem->sn_modem) }}" placeholder="Serial Number">
                    @error('sn_modem')
                                <div class="invalid-feedback text-red-600">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                </div>
                <div class="mb-6">
                    <label for="karyawan_nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Karyawan</label>
                        <select id="karyawan_nip" name="karyawan_nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('karyawan_nip') is-invalid
                        @enderror">
                            @foreach ($employees as $employee)
                            <option value ="{{ $employee->nip_pgwi }}" @if($employee->nip_pgwi == $modem->karyawan_nip) selected @endif>{{ $employee->nama }}</option>
                            @endforeach
                    </select>
                    @error('karyawan_nip')
                                <div class="invalid-feedback text-red-600">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                </div>
                <div class="relative max-w mb-6">
                    <label for="modem_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input name="modem_masuk" datepicker value="{{ old('modem_masuk', $date) }}" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 " placeholder="Pilih Tanggal">
                </div>
                <div class="mb-6">
                    <label for="tujuan_out" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tujuan Out</label>
                        <select id="tujuan_out" name="tujuan_out" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('tujuan_out') is-invalid
                        @enderror">
                            <option value ="PSB" @if($modem->tujuan_out == 'PSB') selected @endif>PSB</option>    
                            <option value ="TSO" @if($modem->tujuan_out == 'TSO') selected @endif>TSO</option>    
                    </select>
                    @error('tujuan_out')
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