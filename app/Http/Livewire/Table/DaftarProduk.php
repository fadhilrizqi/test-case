<?php

namespace App\Http\Livewire\Table;

use Livewire\WithFileUploads;
use App\Models\ProductModel;
use Livewire\Component;

class DaftarProduk extends Component
{
    use WithFileUploads;

    public $data, $gambar, $nama, $sku, $desc, $kategori, $harga, $produk_id;
    public $deleteId = '';
    public $isModalOpen = 0;
    public $addMode = false;
    public $updateMode = false;
    public $detailMode = false;
    public $deleteMode = false;

    protected $listeners = ['refresh-data' => '$refresh'];

    public function render()
    {
        $this->data = ProductModel::all();
        return view('livewire.table.daftar-produk');
    }

    public function create()
    {
        //$this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetInputFields()
    {
        $this->gambar = '';
        $this->nama = '';
        $this->sku = '';
        $this->desc = '';
        $this->kategori = '';
        $this->harga = '';
    }

    public function cancel()
    {
        $this->addMode = false;
        $this->updateMode = false;
        $this->detailMode = false;
        $this->deleteMode = false;
        $this->resetInputFields();
    }

    public function add()
    {
        $this->addMode = true;
    }

    public function store()
    {

        $filenameWithExt = $this->gambar->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $this->gambar->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        $this->gambar->storeAs('public/product_image', $filenameSimpan);

        //$imgname = $this->gambar->store('product_image', 'public');

        ProductModel::create([
            'image' => $filenameSimpan, //substr($this->gambar, 12),
            'nama' => $this->nama,
            'sku' => $this->sku,
            'desc' => $this->desc,
            'kategori' => $this->kategori,
            'harga' => $this->harga
        ]);

        $this->addMode = false;

        session()->flash('message', 'Product Created Successfully.');

        $this->resetInputFields();

        //return redirect()->route('dashboardAdmin');
    }

    public function show($id)
    {
        //$this->data = ProductModel::where('id', $id)->first();
        //return view('livewire.modal.detail-produk');
        //$this->emitTo('detail-produk', 'show',['id' => $id]);
        $this->detailMode = true;
        $produk = ProductModel::where('id', $id)->first();
        $this->produk_id = $id;
        $this->gambar = $produk->gambar;
        $this->nama = $produk->nama;
        $this->sku = $produk->sku;
        $this->desc = $produk->desc;
        $this->kategori = $produk->kategori;
        $this->harga = $produk->harga;
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $produk = ProductModel::where('id', $id)->first();
        $this->produk_id = $id;
        $this->gambar = $produk->gambar;
        $this->nama = $produk->nama;
        $this->sku = $produk->sku;
        $this->desc = $produk->desc;
        $this->kategori = $produk->kategori;
        $this->harga = $produk->harga;
    }

    public function update()
    {

        if ($this->produk_id) {
            $produk = ProductModel::find($this->produk_id);
            $produk->update([
                'image' => substr($this->gambar, 12),
                'nama' => $this->nama,
                'sku' => $this->sku,
                'desc' => $this->desc,
                'kategori' => $this->kategori,
                'harga' => $this->harga
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Product Updated Successfully.');
            $this->resetInputFields();
        }
    }

    public function lihat($id)
    {
        $this->emit('showProduk', $id);
    }

    public function deleteId($id)
    {
        $this->deleteMode = true;
        $produk = ProductModel::where('id', $id)->first();
        $this->produk_id = $id;
        $this->gambar = $produk->gambar;
        $this->nama = $produk->nama;
        $this->sku = $produk->sku;
        $this->desc = $produk->desc;
        $this->kategori = $produk->kategori;
        $this->harga = $produk->harga;
    }



    public function delete($id)
    {
        ProductModel::find($id)->delete();
        session()->flash('message', 'Product Deleted Successfully.');
    }

    public function hapus()
    {
        if ($this->produk_id) {
            ProductModel::find($this->deleteId)->delete();
            $this->deleteMode = false;
            session()->flash('message', 'Product Deleted Successfully.');
        }
    }
}
