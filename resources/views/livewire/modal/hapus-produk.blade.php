<form action="{{ route('product-destroy', $data->id ?? '') }}" method="POST">
    @csrf
    @method('DELETE')
    <div id="hapus-produk" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center"
        aria-hidden="true">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-xl shadow dark:bg-gray-700">
                <div class="p-6 text-center">
                    <h1 class="text-lg mb-5 font-bold text-gray-900 dark:text-white">
                        Hapus Produk
                    </h1>
                    <h3 class="mb-5 text-gray-600 text-sm">Anda yakin ingin menghapus produk Semen Dynamix 40kg?</h3>
                    <div class="flex gap-5 justify-center">
                        <button data-modal-toggle="hapus-produk" type="button"
                            class="text-white text-sm px-10 py-2 bg-gray-400 rounded-lg">
                            Batal
                        </button>
                        <button data-modal-toggle="hapus-produk" type="submit"
                            class="text-white text-sm px-10 py-2 bg-red-600 rounded-lg">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
