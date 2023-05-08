<!-- Main modal -->
<div id="edit-produk" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-6 rounded-t dark:border-gray-600">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                    Edit Produk
                </h3>
                <button type="button" class="text-red-500 bg-red-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="edit-produk">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="px-5">
                <form class="max-h-96 overflow-y-auto px-1" action="">
                    <div class="mb-6 w-max">
                        <span class="text-gray-900 font-medium px-1">Foto Produk</span>
                        <label type="file" name="image-product" id="image-product" required>
                            <span>
                                <img src="assets/images/image.png" class="mt-4 img-preview w-28 h-28 border-2 rounded-xl hover:bg-slate-200 cursor-pointer" alt="">
                            </span>
                            <input class="hidden" type="file" id="image" onchange="previewImage()">
                        </label>
                    </div>
                    <div class="mb-6">
                        <label for="nama-produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Produk</label>
                        <input type="text" id="nama-produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Produk" required>
                    </div>
                    <div class="mb-6">
                        <label for="sku-produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SKU Produk</label>
                        <input type="text" id="sku-produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="SKU Produk" required>
                    </div>
                    <div class="mb-6">
                        <label for="desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi</label>
                        <textarea name="desc" id="desc" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis deskripsi disini" required></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">kategori Produk</label>
                            <select id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected>Pilih Kategori Produk</option>
                            <option value="">Material Bangunan</option>
                            <option value="">Perkakas</option>
                            <option value="">Makanan</option>
                            <option value="">Minuman</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="harga-produk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Produk</label>
                        <input type="text" id="harga-produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rp" required>
                    </div>

                    {{-- Button --}}
                    <div class="flex mb-6 gap-5 justify-end">
                        <button data-modal-toggle="edit-produk" type="button" class="text-white text-sm px-10 py-2 bg-gray-400 rounded-lg"> 
                            Batal
                        </button>
                        <button data-modal-toggle="edit-produk" type="button" class="text-white text-sm px-10 py-2 bg-red-600 rounded-lg"> 
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>