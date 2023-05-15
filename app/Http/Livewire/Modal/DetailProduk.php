<?php

namespace App\Http\Livewire\Modal;

use App\Models\ProductModel;
use Livewire\Component;

class DetailProduk extends Component
{
    public $data, $gambar, $nama, $sku, $desc, $kategori, $harga, $produk_id;
    //public $show = false;
    protected $listeners = ['showProduk'];
    //protected $listeners = ['showProduct' => 'render'];

    public function render()
    {
        return view('livewire.modal.detail-produk');
    }

    public function showProduk($id)
    {
        //dd($id);
        //dd('sini');
        //$this->show = true;
        //$data = ProductModel::where('id', $id)->first();
        //return response()->view('livewire.modal.detail-produk', compact('data'));
        $data = ProductModel::where('id', $id)->first();
        $this->produk_id = $data->id;
        $this->gambar = $data->gambar;
        $this->nama = $data->nama;
        $this->sku = $data->sku;
        $this->desc = $data->desc;
        $this->kategori = $data->kategori;
        $this->harga = $data->harga;
    }

    public function showProduct($id)
    {
        //dd('sini');
        //$this->show = true;
        $data = ProductModel::where('id', $id)->first();
        return view('livewire.modal.detail-produk', compact('data'));
    }
}
