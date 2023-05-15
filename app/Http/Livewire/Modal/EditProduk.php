<?php

namespace App\Http\Livewire\Modal;

use App\Models\ProductModel;
use Livewire\Component;

class EditProduk extends Component
{
    public $data, $gambar, $nama, $sku, $desc, $kategori, $harga;

    public function render()
    {
        return view('livewire.modal.edit-produk');
    }

    public function editProduct($id)
    {
        $data = ProductModel::where('id', $id)->first();
        return response()->view("livewire.modal.edit-produk", compact('data'));
    }

    public function update($id)
    {
        ProductModel::where('id', $id)->update([
            'image' => substr($this->gambar, 12),
            'nama' => $this->nama,
            'sku' => $this->sku,
            'desc' => $this->desc,
            'kategori' => $this->kategori,
            'harga' => $this->harga
        ]);

        session()->flash('message', 'Product Updated Successfully.');

        return redirect()->route('dashboardAdmin');
    }
}
