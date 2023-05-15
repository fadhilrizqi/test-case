<?php

namespace App\Http\Livewire\Modal;

use App\Models\ProductModel;
use Livewire\Component;

class HapusProduk extends Component
{
    public $data, $produk_id;

    public function render()
    {
        //$this->data = ProductModel::all();
        return view('livewire.modal.hapus-produk');
    }

    public function deleteProduct($id)
    {

        ProductModel::where('id', $id)->delete();
        return redirect()->route('dashboardAdmin');
    }

    public function delete($id)
    {
        ProductModel::where('id', $id)->delete();
        $this->emit('refresh-data');
    }
}
