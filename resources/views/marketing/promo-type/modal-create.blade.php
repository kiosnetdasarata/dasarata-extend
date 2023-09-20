<div id="authentication-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3
                    class="mb-4 text-2xl font-bold leading-none tracking-tight text-black md:text-2xl dark:text-slate-200">
                    Tambah Promo</h3>
                <div class="col-lg-8 p-4 border-2 border-gray-200 border-solid rounded-lg dark:border-slate-500">
                    <form name="createPromo" action="{{ route('marketing.promo-type.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="nama_type_program"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Promo</label>
                            <input type="text" id="nama_type_program" name="nama_type_program"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nama_type_program') is-invalid
                            @enderror"
                                value="{{ old('nama_type_program') }}" placeholder="Nama Paket Layanan" required>
                            @error('nama_type_program')
                                <div class="invalid-feedback text-red-600">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="nominal"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                            <input type="text" id="nominal" name="nominal"
                                class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('nominal') is-invalid
                            @enderror"
                                value="{{ old('nominal') }}" placeholder="Nominal" required>
                            @error('nominal')
                                <div class="invalid-feedback text-red-600">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <div class="relative max-w mb-6">
                            <label for="tanggal_dibuat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                                Dibuat</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 mt-6 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input name="tanggal_dibuat" datepicker value="{{ old('tanggal_dibuat') }}" type="text"
                                autocomplete="off"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                placeholder="Pilih Tanggal">
                        </div>
                        <div class="mb-6">
                            <label for="s_n_k"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Syarat dan
                                Ketentuan</label>
                            <textarea id="s_n_k" rows="4" name="s_n_k"
                                class="block p-2.5 mb-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('s_n_k') is-invalid
                                @enderror"
                                placeholder="Syarat dan Ketentuan..."></textarea>
                            @error('s_n_k')
                                <div class="invalid-feedback text-red-600">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                        </div>
                        <button type="submit"
                            class="focus:outline-none text-slate-100 bg-gray-900 hover:bg-gray-600 focus:ring-2 focus:ring-gray-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-900 dark:hover:bg-gray-600 dark:focus:ring-gray-800">Submit</button>
                        <button type="reset"
                            class="ml-2 focus:outline-none hover:bg-gray-300 text-gray-800 bg-gray-200 border-[1px] border-gray-400 focus:ring-2 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:text-white dark:border-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 dark:focus:ring-gray-900">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
