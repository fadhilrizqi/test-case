<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ProductModel::all();
        return response()->view('role.admin.PageDashboardAdmin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'image' => 'image|nullable|1999',
            'nama-produk' => 'required',
            'sku-produk' => 'required',
            'desc' => 'required',
            'kategori' => 'required',
            'harga-produk' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/product_image', $filenameSimpan);
        } else {
            $filenameSimpan = 'noimage.jpg';
        }

        ProductModel::create([
            'image' => $filenameSimpan,
            'nama' => $request->input('nama-produk'),
            'sku' => $request->input('sku-produk'),
            'desc' => $request->input('desc'),
            'kategori' => $request->input('kategori'),
            'harga' => $request->input('harga-produk'),
        ]);

        return redirect()->route('dashboardAdmin')->with('messages', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductModel $productModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductModel $productModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductModel $productModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductModel $productModel)
    {
        //
    }
}
