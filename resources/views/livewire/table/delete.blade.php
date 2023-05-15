<div class="relative p-4 w-full max-w-md h-full md:h-auto">
    <div class="relative bg-white rounded-xl shadow dark:bg-gray-700">
        <div class="p-6 text-center">
            <h1 class="text-lg mb-5 font-bold text-gray-900 dark:text-white">
                Hapus Produk
            </h1>
            <input type="hidden" wire:model="produk_id" value={{$produk_id}}>
            <h3 class="mb-5 text-gray-600 text-sm" wire:model="nama">Anda yakin ingin menghapus produk
                {{ $nama }}?</h3>
            <div class="flex gap-5 justify-center">
                <button type="button" wire:click.prevent="cancel()"
                    class="text-white text-sm px-10 py-2 bg-gray-400 rounded-lg">
                    Batal
                </button>
                <button type="button" wire:click.prevent="hapus()"
                    class="text-white text-sm px-10 py-2 bg-red-600 rounded-lg">
                    Hapus
                </button>
            </div>
        </div>
    </div>
</div>
