<form class="max-h-96 overflow-y-auto px-1" action="">
    <div class="mb-5 w-max">
        <div class="w-28 h-28 flex items-center justify-center rounded-lg bg-white border">
            <img class="w-24 h-24" wire.mode="gambar" src="{{ asset('storage/product_image/' . $gambar) }}" alt="">
        </div>
        <div class="mb-5">
            <h1 class="font-bold text-gray-700" wire:model="nama">{{ $nama }}</h1>
            <span class="text-gray-500 text-sm" wire:model="sku">SKU: {{ $sku }}</span>
        </div>
        <div class="mb-5 max-w-lg">
            <h1 class="font-semibold text-gray-700">Deskripsi Produk</h1>
            <span class="text-gray-500 text-sm" wire:model="desc">{{ $desc }}</span>
        </div>
        <div class="mb-5">
            <h1 class="font-semibold text-gray-700">Kategori</h1>
            <span class="text-gray-500 text-sm" wire:model="kategori">{{ $kategori }}</span>
        </div>
        <div class="mb-5">
            <h1 class="font-semibold text-gray-700">Harga</h1>
            <span class="text-gray-500 text-sm" wire:model="harga">Rp {{ $harga }}</span>
        </div>
    </div>
    {{-- Button --}}
    <div class="flex mb-6 gap-5 justify-start">
        <button type="button" wire:click.prevent="cancel()"
            class="text-white text-sm px-10 py-2 bg-gray-400 rounded-lg">
            Tutup
        </button>
    </div>
</form>
