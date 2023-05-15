<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductModel;

class Product extends Component
{
    public $produk, $image, $nama, $sku, $desc, $kategori, $harga;
    public $updateMode = false;

    public function render()
    {
        $this->produk = ProductModel::latest()->get();
        return view('livewire.product');
    }

    private function resetInputFields()
    {
        $this->image = '';
        $this->nama = '';
        $this->sku = '';
        $this->desc = '';
        $this->kategori = '';
        $this->harga = '';
    }

    public function store()
    {
        //
        $validatedData = $this->validate([
            'image' => 'image|nullable|1999',
            'nama-produk' => 'required',
            'sku-produk' => 'required',
            'desc' => 'required',
            'kategori' => 'required',
            'harga-produk' => 'required',
        ]);

        if ($this->image->hasFile('image')) {
            $filenameWithExt = $this->image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $this->image->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $this->image->storeAs('public/product_image', $filenameSimpan);
        } else {
            $filenameSimpan = 'noimage.jpg';
        }

        return redirect()->route('dashboardAdmin')->with('messages', 'Data Berhasil Disimpan');

        ProductModel::create($validatedData);

        session()->flash('message', 'Product Created Successfully.');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $produk = ProductModel::findOrFail($id);
        $this->id = $id;
        $this->image = $produk->image;
        $this->nama = $produk->nama;
        $this->sku = $produk->image;
        $this->desc = $produk->nama;
        $this->kategori = $produk->image;
        $this->harga = $produk->harga;
  
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedData = $this->validate([
            'image' => 'image|nullable|1999',
            'nama-produk' => 'required',
            'sku-produk' => 'required',
            'desc' => 'required',
            'kategori' => 'required',
            'harga-produk' => 'required',
        ]);
  
        $produk = ProductModel::find($this->id);
        $produk->update([
            'image' => $this->image,
            'nama-produk' => $this->nama,
            'sku-produk' => $this->sku,
            'desc' => $this->desc,
            'kategori' => $this->kategori,
            'harga-produk' => $this->harga,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Product Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        ProductModel::find($id)->delete();
        session()->flash('message', 'Product Deleted Successfully.');
    }
}
