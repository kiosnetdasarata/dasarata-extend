@extends('layouts.warehouse-main')

@section('content')
    <div class="">
        <h2 class="dark:text-white font-bold text-3xl mb-4">Input Tiang</h2>
        <div class="p-4 col-lg-8 border-2 border-gray-800 rounded-lg">
            <form action="{{ route('warehouse.pole.store') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="tiang" class="block dark:text-white text-sm font-medium">Tiang</label>
                    <input type="number" name="tiang" id="tiang" placeholder="0" autofocus
                        class="block text-sm w-24 p-2.5 form-control border focus:ring-gray-900 bg-transparent border-gray-800 focus:border-gray-900 dark:text-white rounded-lg">
                </div>
                <div class="grid grid-cols-2 gap-2 mb-6">
                    <div>
                        <label for="ukuran" class="block dark:text-white text-sm font-medium">Ukuran Tiang</label>
                        <input type="text" name="ukuran" id="ukuran" placeholder="ukuran"
                            class="w-full form-control block text-sm p-2.5 border focus:ring-gray-900 focus:border-gray-900 bg-transparent rounded-lg dark:text-white border-gray-800">
                    </div>
                    <div>
                        <label for="ketebalan" class="block dark:text-white text-sm font-medium">Ketebalan</label>
                        <input type="text" name="ketebalan" id="ketebalan" placeholder="ketebalan"
                            class="w-full form-control block text-sm p-2.5 border focus:ring-gray-900 focus:border-gray-900 bg-transparent rounded-lg dark:text-white border-gray-800">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 mb-6">
                    <div>
                        <label for="tinggi" class="block dark:text-white text-sm font-medium">Tinggi</label>
                        <input type="text" name="tinggi" id="tinggi" placeholder="tinggi"
                            class="w-full form-control block text-sm p-2.5 border focus:ring-gray-900 focus:border-gray-900 bg-transparent rounded-lg dark:text-white border-gray-800">
                    </div>
                    <div>
                        <label for="vendor" class="block dark:text-white text-sm font-medium">Vendor</label>
                        <input type="text" name="vendor" id="vendor" placeholder="vendor"
                            class="w-full form-control block text-sm p-2.5 border focus:ring-gray-900 focus:border-gray-900 bg-transparent rounded-lg dark:text-white border-gray-800">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="harga" class="block dark:text-white text-sm font-medium">Harga</label>
                    <input type="text" name="harga" id="harga" placeholder="harga"
                        class="form-control block text-sm p-2.5 border focus:ring-gray-900 focus:border-gray-900 bg-transparent rounded-lg dark:text-white border-gray-800" autocomplete="off">
                </div>
                <button type="submit" class="bg-gray-300 hover:bg-gray-400 dark:bg-gray-900 dark:hover:bg-gray-800 p-2.5 rounded-lg dark:text-white">Submit</button>
            </form>
        </div>
    </div>
@endsection
