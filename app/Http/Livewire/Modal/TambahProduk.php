<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductModel;

class TambahProduk extends Component
{
    use WithFileUploads;

    public $data, $gambar, $nama, $sku, $desc, $kategori, $harga;
    public $store = false;
    public $photo;

    public function render()
    {
        //$this->data = ProductModel::all();
        return view('livewire.modal.tambah-produk');
    }

    private function resetInputFields()
    {
        $this->gambar = null;
        $this->nama = '';
        $this->sku = '';
        $this->desc = '';
        $this->kategori = '';
        $this->harga = '';
    }

    public function store()
    {
        /*
        $this->validate([
            //'gambar' => 'image|mimes:png,jpg|max:102400',
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $filenameWithExt = $this->photo->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $this->photo->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        $this->photo->storeAs('public/product_image', $filenameSimpan);

        //$filename = $this->gambar->store('product_image', 'public');

        //$ValData['gambar'] = $filename;

        //$filename = $this->gambar->getFilename();
        */
        ProductModel::create([
            'image' => substr($this->gambar, 12),
            'nama' => $this->nama,
            'sku' => $this->sku,
            'desc' => $this->desc,
            'kategori' => $this->kategori,
            'harga' => $this->harga
        ]);

        session()->flash('message', 'Product Created Successfully.');

        $this->resetInputFields();

        return redirect()->route('dashboardAdmin');
    }

    public function cancel()
    {
        $this->store = false;
        $this->resetInputFields();
    }
}
