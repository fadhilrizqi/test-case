<!-- Main modal -->

<div id="detail-produk" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-6 rounded-t dark:border-gray-600">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                    Detail Produk
                </h3>
                <button type="button"
                    class="text-red-500 bg-red-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="detail-produk">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="px-5">
                <form class="max-h-96 overflow-y-auto px-1" action="">
                    <div class="mb-5 w-max">
                        <div class="w-28 h-28 flex items-center justify-center rounded-lg bg-white border">
                            <img class="w-24 h-24" src="{{ asset('assets/images/produk/semen.png') }} " alt="">
                        </div>
                        <div class="mb-5">
                            <h1 class="font-bold text-gray-700" wire:model="nama">{{ $data->nama ?? 'Semen Dynamix 40kg' }}</h1>
                            <span class="text-gray-500 text-sm">SKU: {{ $data->sku ?? 'P001' }}</span>
                        </div>
                        <div class="mb-5 max-w-lg">
                            <h1 class="font-semibold text-gray-700">Deskripsi Produk</h1>
                            <span
                                class="text-gray-500 text-sm">{{ $data->desc ?? 'Semen dynamix kualitas bagus, berat 40kg cocok untuk membangun rumah Anda.' }}</span>
                        </div>
                        <div class="mb-5">
                            <h1 class="font-semibold text-gray-700">Kategori</h1>
                            <span class="text-gray-500 text-sm">{{ $data->kategori ?? 'Material Bangunan' }}</span>
                        </div>
                        <div class="mb-5">
                            <h1 class="font-semibold text-gray-700">Harga</h1>
                            <span class="text-gray-500 text-sm">Rp{{ $data->harga ?? '50.000' }}</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
