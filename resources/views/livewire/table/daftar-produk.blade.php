<div class="relative bg-white p-5 rounded-xl overflow-hidden">
    <div class="flex flex-col md:flex-row gap-4 md:items-center md:justify-between py-3">
        <div class="flex flex-row justify-between items-center md:items-start md:flex-col">
            <h1 class="font-bold text-xl text-black">Daftar Produk</h1>
            <p class="text-sm text-gray-500">100 produk</p>
        </div>
        <div class="flex flex-col md:flex-row gap-5 items-center">
            <button type="button" class="text-[#33DD58] border border-[#33DD58] bg-white rounded-md px-4 py-2 text-sm flex items-center gap-3">
                <span class="iconify" data-icon="mdi:file-download"></span>
                Export Produk
            </button>
            <button data-modal-toggle="import-produk" type="button" class="text-[#3377DD] border border-[#3377DD] bg-white rounded-md px-4 py-2 text-sm flex items-center gap-3">
                <span class="iconify" data-icon="material-symbols:upload-file-rounded"></span>
                Import Produk
            </button>   
            <button data-modal-toggle="tambah-produk" type="button" class="text-white bg-[#DD3333] rounded-md px-4 py-2 text-sm flex items-center gap-3">
                <span class="iconify" data-icon="ic:round-plus"></span>
                Tambah Produk
            </button>
        </div>
    </div>

    <div class="overflow-auto h-full">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-500 uppercase bg-white border-b">
                <tr>
                    <th scope="col" class="py-3 px-6 truncate">
                        Produk
                    </th>
                    <th scope="col" class="py-3 px-6 truncate">
                        Deskripsi
                    </th>
                    <th scope="col" class="py-3 px-6 truncate">
                        Kategori
                    </th>
                    <th scope="col" class="py-3 px-6 truncate">
                        Harga
                    </th>
                    <th scope="col" class="py-3 px-6 truncate">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="text-gray-900">
                <tr class="bg-white border-b">
                    <td class="py-4 px-6">
                        <div class="flex flex-row items-center font-semibold gap-5">
                            <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-white border">
                                <img class="w-8 h-8" src="{{ asset('assets/images/produk/semen.png') }} " alt="">
                            </div>
                            <div>
                                <h1 class="truncate">Semen Dynamix 40kg</h1>
                                <span class="text-gray-500 text-xs">SKU: P001</span>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6 truncate font-semibold max-w-xs">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut adipisci amet, maxime tempora enim nisi labore assumenda delectus! Quasi maxime libero in ipsam alias magnam at dolore est repudiandae recusandae.
                    </td>
                    <td class="py-4 px-6 truncate font-semibold">
                        Material Bangunan
                    </td>
                    <td class="py-4 px-6 truncate font-semibold">
                        Rp50.000
                    </td>
                    <td class="py-4 px-6 truncate font-semibold">
                        <button id="dropdownMenuDetailToko" data-dropdown-toggle="dropdownDetailToko" class="inline-flex items-center p-1 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                        </button>
                          
                        <!-- Dropdown menu -->
                        <div id="dropdownDetailToko" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-600 dark:text-gray-200" aria-labelledby="dropdownMenuDetailToko">
                                <li>
                                    <button data-modal-toggle="detail-produk" type="button" class="flex gap-2 items-center w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <span class="iconify w-5 h-5" data-icon="solar:document-text-bold-duotone"></span>
                                        Detail
                                    </button>
                                </li>
                                <li>
                                    <button data-modal-toggle="edit-produk" type="button" class="flex gap-2 items-center w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <span class="iconify w-5 h-5" data-icon="ph:pencil-simple-line-duotone"></span>
                                        Edit
                                    </button>
                                </li>
                                <li>
                                    <button data-modal-toggle="hapus-produk" type="button" class="flex gap-2 items-center w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        <span class="iconify w-5 h-5" data-icon="ic:twotone-delete"></span>
                                        Hapus
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-sm flex justify-center gap-5 flex-col md:flex-row md:justify-between text-gray-700 bg-white rounded-b-lg px-5 pt-5">
        <div class="flex items-center gap-4">
            Show
            <select class="bg-gray-100 border  border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-16 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
               <option selected value="">5</option>
               <option value="">10</option>
               <option value="">20</option>
            </select>
            <p>of <span class="font-bold">100</span> </p>
        </div>
        <div>  
            <nav aria-label="Page navigation example">
                <ul class="inline-flex items-center">
                    <li>
                        <a href="#"
                            class="block py-2 ml-0 leading-tight text-gray-500 hover:text-cyan-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="py-2 px-3  ml-2 rounded-lg leading-tight text-white bg-red-600 border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                    </li>
                    <li>
                        <a href="#"
                            class="py-2 px-3  ml-2 rounded-lg leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">10</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 ml-2 leading-tight text-gray-500 hover:text-cyan-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div></div>
    </div>
</div>