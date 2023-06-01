@extends('layouts.hr-main')

@section('content')

<form name="updatePegawai" action="{{ url('employees/'.$data->nip_pgwi) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-6">
        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
        <input name="nik" id="nik" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('nik') is-invalid
        @enderror" value="{{ $data->nik }}" type="text" placeholder="Nomor Induk Kependudukan" autocomplete="off">
        @error('nik')
        <div class="text-gray-900 invalid-feedback dark:text-white">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-6">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pegawai</label>
        <input type="text" id="nama" name="nama" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:focus:bg-gray-700  @error('nama') is-invalid
        @enderror" value="{{ $data->nama }}" placeholder="Nama Lengkap" autocomplete="off">
        @error('nama')
        <div class="text-gray-900 invalid-feedback dark:text-white">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-6">
        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Handphone</label>
        <input type="text" id="no_tlpn" name="no_tlpn" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:focus:bg-gray-700  @error('no_tlpn') is-invalid
        @enderror" value="{{ $data->no_tlpn }}" placeholder="Nomor Handphone" autocomplete="off">
        @error('no_tlpn')
        <div class="text-gray-900 invalid-feedback dark:text-white">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="grid grid-cols-2 gap-4 mb-6">
        <div>
            <label for="tempat_lahir"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="tempat_lahir" value="{{ $data->tempat_lahir }}" type="text" placeholder="Tempat Lahir" autocomplete="off" name="tempat_lahir">
        </div>
        <div>
            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
            <input id="tgl_lahir" datepicker datepicker-format="yyyy/mm/dd" value="{{ $data->tgl_lahir }}" type="text" name="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal" autocomplete="off">
        </div>
    </div>
    <div class="mb-6">
        <label for="jk"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
        <select name="jk" id="jk" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" autocomplete="off">
            {{-- <option selected>--Pilih Jenis Kelamin--</option> --}}
            @if (old('jk', $data->jk)==$data->jk)
            <option value="{{ old('jk', $data->jk) }}"selected>{{old('jk', $data->jk) }}</option>
            @else
            <option value="perempuan" >Perempuan</option>
            <option value="laki-laki">Laki-Laki</option>
            @endif
        </select>
    </div>
    <div class="mb-6">
        <label for="almt_detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
        <input name="almt_detail" id="almt_detail" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  @error('almt_detail') is-invalid
        @enderror" value="{{ $data->almt_detail }}" type="text" placeholder="Alamat Detail" autocomplete="off">
        @error('almt_detail')
        <div class="text-gray-900 invalid-feedback dark:text-white">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-6">
            <label for="provinces_id"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Provinsi</label>
            <select id="province_id" name="province_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Provinsi--</option>
                @foreach ($provinces as $item)
                <option value ="{{ $item->id }}" {{ old('province_id', $data->province_id) ==$item->id ? 'selected' : null }}>{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="regencies_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota/Kabupaten</label>
            <select id="regencie_id" name="regencie_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Kota/Kabupaten--</option>
                @foreach ($regencies as $item)
                    <option value ="{{ $item->id }}" {{ old('regencie_id', $data->regencie_id) ==$item->id ? 'selected' : null }}>{{ $item->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="districts_id"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kecamatan</label>
            <select id="district_id" name="district_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Kecamatan--</option>
                @foreach ($districts as $item)
                    <option value ="{{ $item->id }}" {{ old('district_id', $data->district_id) ==$item->id ? 'selected' : null }}>{{ $item->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="villages_id"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelurahan</label>
            <select id="village_id" name="village_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Pilih Kelurahan--</option>
                @foreach ($villages as $item)
                    <option value ="{{ $item->id }}" {{ old('village_id', $data->village_id) ==$item->id ? 'selected' : null }}>{{ $item->name }}</option>
                    @endforeach
            </select>
        </div>
    </div>
    <div class="mb-6">
        <label for="agama"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agama</label>
        <select name="agama" id="agama" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @if (old('agama', $data->agama)==$data->agama)
            <option value="{{ old('agama', $data->agama) }}"selected>{{old('agama', $data->agama) }}</option>
            @else     
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="katolik">Katolik</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
            <option value="konghucu">Konghucu</option>
            @endif
        </select>
    </div>
    <div class="mb-6">
        <label for="status_perkawinan"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkawinan</label>
        <select id="status_perkawinan" name="status_perkawinan" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @if (old('status_perkawinan', $data->status_perkawinan)==$data->status_perkawinan)
            <option value="{{ old('status_perkawinan', $data->status_perkawinan) }}"selected>{{old('status_perkawinan', $data->status_perkawinan) }}</option>
            @else    
            <option value="kawin">Kawin</option>
            <option value="belum kawin">Belum Kawin</option>
            <option value="cerai">Cerai</option>
            <option value="cerai">Cerai Mati</option>
            @endif
        </select>
    </div>
    <div class="mb-6">
        <label for="pendidikan_terakhir"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan Terakhir</label>
        <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @if (old('pendidikan_terakhir', $data->pendidikan_terakhir)==$data->pendidikan_terakhir)
            <option value="{{ old('pendidikan_terakhir', $data->pendidikan_terakhir) }}"selected>{{old('pendidikan_terakhir', $data->pendidikan_terakhir) }}</option>
            @else
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma">SMA/SMK</option>
            <option value="d1">D1</option>
            <option value="d2">D2</option>
            <option value="d3">D3</option>
            <option value="s1">D4/S1</option>
            <option value="s2">S2</option>
            <option value="s3">S3</option>  
            @endif
        </select>
    </div>
    <div class="mb-6">
        <label for="nama_instansi"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Instansi</label>
        <input id="nama_instansi" name="nama_instansi" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="nomor_telepon" value="{{ $data->nama_instansi }}" type="text" placeholder="Nama Instansi">
    </div>
    <div class="mb-6">
        <label for="tahun_lulus"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Periode</label>
        <input id="tahun_lulus" name="tahun_lulus" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="nomor_telepon" value="{{ $data->tahun_lulus }}"type="text" placeholder="Periode">
    </div>
    <div class="mb-6">
        <label for="divisi"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Divisi</label>
        <select id="divisi_id" name="divisi_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>--Pilih Divisi--</option>
            @foreach ($divisions as $item)
                    <option value ="{{ $item->id }}" {{ old('divisi_id', $data->divisi_id) ==$item->id ? 'selected' : null }}>{{ $item->nama_divisi }}</option>
                    @endforeach
        </select>
    </div>
    <div class="mb-6">
        <label for="jabatan"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
        <select id="jabatan_id" name="jabatan_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>--Pilih Jabatan--</option>
            @foreach ($job_titles as $item)
                    <option value ="{{ $item->id }}" {{ old('jabatan_id', $data->jabatan_id) ==$item->id ? 'selected' : null }}>{{ $item->nama_jabatan }}</option>
                    @endforeach
        </select>
    </div>
    <button type="submit" class="focus:outline-none text-slate-100 bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
    <button type="reset" class="ml-2 focus:outline-none text-slate-100 bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Reset</button>
</form>

@endsection
