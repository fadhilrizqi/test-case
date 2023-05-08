<!-- Main modal -->
<div id="import-produk" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-6 rounded-t dark:border-gray-600">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                    Impor Produk
                </h3>
                <button type="button" class="text-red-500 bg-red-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="import-produk">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="px-5">
                <form class="max-h-96 overflow-y-auto px-1" action="">
                    <div class="">
                        <h1 class="text-sm mb-5 font-semibold text-gray-500">Silahkan upload file untuk menambahkan produk secara masal. Unduh template file <a href="" class="text-blue-600">Disini</a></h1>
                        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Unggah File</label>
                        <div class="relative mb-6">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 text-gray-400 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z"/><path fill="currentColor" d="M13.586 2a2 2 0 0 1 1.284.467l.13.119L19.414 7a2 2 0 0 1 .578 1.238l.008.176V20a2 2 0 0 1-1.85 1.995L18 22h-6v-2h6V10h-4.5a1.5 1.5 0 0 1-1.493-1.356L12 8.5V4H6v8H4V4a2 2 0 0 1 1.85-1.995L6 2h7.586ZM7.707 14.464l2.829 2.829a1 1 0 0 1 0 1.414l-2.829 2.828a1 1 0 1 1-1.414-1.414L7.414 19H3a1 1 0 1 1 0-2h4.414l-1.121-1.121a1 1 0 1 1 1.414-1.415ZM14 4.414V8h3.586L14 4.414Z"/></g></svg>
                            </div>
                            <label for="file-upload" class="bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5">
                                Import File
                            </label>
                            <input id="file-upload" type="file" style="display:none;" accept=".xlsx,.xls">
                        </div>
                    </div>

                    {{-- Button --}}
                    <div class="flex mb-6 gap-5 justify-end">
                        <button data-modal-toggle="import-produk" type="button" class="text-white text-sm px-10 py-2 bg-gray-400 rounded-lg"> 
                            Batal
                        </button>
                        <button data-modal-toggle="import-produk" type="button" class="text-white text-sm px-10 py-2 bg-blue-600 rounded-lg"> 
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>