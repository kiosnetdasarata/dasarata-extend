<div id="komisi-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="komisi-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Kategori Level</h3>
                <form name="createKomisi" action="#" method="POST">
                    @csrf

                    <div class="mb-6">
                        <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white  @error('nominal') is-invalid
                        @enderror" value="{{ old('nominal') }}">Nominal</label>
                        <input name="nominal"  class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="nominal" type="number" placeholder="Nominal">
                    </div>
                    <div class="mb-6">
                        <label for="max_rentang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maksimum Rentang</label>
                        <input name="max_rentang" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-40 @error('max_rentang') is-invalid
                        @enderror" value="{{ old('max_rentang') }}" id="max_rentang" type="number" placeholder="Maksimum Rentang">
                    </div>
                    <div class="mb-6">
                        <label for="min_rentang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimum Rentang</label>
                        <input name="min_rentang" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('min_rentang') is-invalid
                        @enderror" value="{{ old('min_rentang') }}" id="min_rentang" type="number" placeholder="Minimum Rentang">
                    </div>
                    <button type="submit" class="focus:outline-none text-slate-100 bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-400 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-puple-600 dark:hover:bg-purple-700 dark:focus:ring-green-800">Submit</button>
                    <button type="reset" class="ml-2 focus:outline-none text-gray-800 bg-gray-200 border-2 border-gray-400 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:text-white dark:bg-gray-500 dark:border-2 dark:border-gray-700 dark:hover:bg-gray-600 dark:focus:ring-grau-900">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
