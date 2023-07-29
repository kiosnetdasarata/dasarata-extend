@extends('layouts.warehouse-main')

@section('content')
    <div class="text-center">
        <h2 class="text-3xl text-white font-semibold mb-6">Input Modem</h2>
        <div class="relative overflow-x-auto shadow-md rounded-lg border border-gray-900">
            <form action="{{ route('warehouse.modem-list.store') }}" method="POST">
                @csrf
                <table class="w-full text-sm text-left border border-gray-900 border-x-0">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-900 dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Serial Number
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                            Versi Modem
                        </th> --}}
                            {{-- <th scope="col" class="px-6 py-3">
                                Type Modem
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody id="dynamic-table">
                        <tr class="bg-gray-700 hover:bg-gray-600">
                            <td class="px-6 py-4 text-white">
                                1
                            </td>
                            <td class="px-6 py-4">
                                <input type="text" class="px-2.5 text-sm" name="modem[1][sn]" placeholder="input sn"
                                    id="input" autofocus>
                            </td>
                            {{-- <td class="px-6 py-4">
                            <input type="text" class="px-2.5 text-sm" name="modem[1][versi]" placeholder="versi" id="inputversi">
                        </td> --}}
                            {{-- <td class="px-6 py-4">
                                <input type="text" class="px-2.5 text-sm" name="type" placeholder="type"
                                    id="inputtype"> --}}
                            </td>
                            <td class="px-6 py-4">
                                {{-- placeholder --}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-end m-2">
                    <button type="submit" class="mr-6 p-2 rounded-lg bg-gray-900 hover:bg-gray-800 text-white">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var i = 1;
            // Listen for the 'keydown' event on input elements
            $(document).keydown(function(event) {
                // Check if the pressed key is Enter (key code 13)
                if (event.keyCode === 13) {
                    // Prevent the default form submission
                    event.preventDefault();
                    // Perform your desired action here
                    // For example, you can submit a form or trigger a specific function
                    // Replace the following line with your desired action
                    newRow();
                    // alert('Enter key pressed!');
                }
            });

            function newRow() {
                i++;
                var newRow = `
                <tr id="row${i}" class="bg-gray-700 hover:bg-gray-600">
                    <td class="px-6 py-4 text-white">
                        ${i}
                    </td>
                    <td class="px-6 py-4">
                        <input type="text" class="px-2.5 text-sm" name="modem[${i}][sn]" placeholder="input sn" id="inputsn">
                    </td>
                    {{-- <td class="px-6 py-4">
                        <input type="text" class="px-2.5 text-sm" name="modem[${i}][versi]" placeholder="versi" id="inputversi">
                    </td> 
                    <td class="px-6 py-4">
                        <input type="text" class="px-2.5 text-sm" name="type" placeholder="type" id="inputtype">
                    </td> --}}
                    <td class="px-6 py-4">
                        <button class="btn_remove bg-red-600 hover:bg-red-500 px-2 rounded" id="${i}" type="button">-</button>
                    </td>
                </tr>
            `;
                $("#dynamic-table").append(newRow);
                $("#dynamic-table tr:last-child #inputsn").focus();
            }

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
                resetRowNumbers();
            });

            function resetRowNumbers() {
                var rows = $("#dynamic-table tr");
                for (var j = 0; j < rows.length; j++) {
                    var row = $(rows[j]);
                    row.find("td:first-child").text(j + 1);
                }
                i = rows.length;
            }
        });
    </script>
@endsection
