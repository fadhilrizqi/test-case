<form>
    <div class="mb-6 w-max">
        <span class="text-gray-900 font-medium px-1">Foto Produk</span>
        <label type="file" name="image-product" id="image-product" required>
            <span>
                <img src="assets/images/image.png"
                    class="mt-4 img-preview w-28 h-28 border-2 rounded-xl hover:bg-slate-200 cursor-pointer"
                    alt="">
            </span>
            <input type="file" name="image" id="image" 
            wire:model.defer="gambar">

        </label>
    </div>
    <div class="mb-6">
        <label for="nama-produk"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Produk</label>
        <input type="text" name="nama-produk" id="nama-produk"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Nama Produk" required wire:model.defer="nama">
    </div>
    <div class="mb-6">
        <label for="sku-produk"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SKU Produk</label>
        <input type="text" name="sku-produk" id="sku-produk"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="SKU Produk" required wire:model.defer="sku">
    </div>
    <div class="mb-6">
        <label for="desc"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deskripsi</label>
        <textarea name="desc" name="desc" id="desc" rows="4"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Tulis deskripsi disini" required wire:model.defer="desc"></textarea>
    </div>
    <div class="mb-6">
        <label for="kategori"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kategori
            Produk</label>
        <select name="kategori" id="kategori" wire:model.defer="kategori"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option disabled selected>Pilih Kategori Produk</option>
            <option value="Material Bangunan">Material Bangunan</option>
            <option value="Perkakas">Perkakas</option>
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Minuman</option>
        </select>
    </div>
    <div class="mb-6">
        <label for="harga-produk"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Produk</label>
        <input type="text" name="harga-produk" id="harga-produk"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Rp" required wire:model.defer="harga">
    </div>

    {{-- Button --}}
    <div class="flex mb-6 gap-5 justify-start">
        <button type="button" wire:click.prevent="cancel()"
            class="text-white text-sm px-10 py-2 bg-gray-400 rounded-lg">
            Batal
        </button>
        <button type="button" wire:click.prevent="store()"
            class="text-white text-sm px-10 py-2 bg-red-600 rounded-lg">
            Simpan
        </button>
    </div>
</form>