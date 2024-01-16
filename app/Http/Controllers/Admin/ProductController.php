<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::query()->get();
        return view('admin.product.index', compact('data'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'desc' => 'required'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        Product::create([
            'name' => $request->name,
            'harga' => $request->harga,
            'image' => $imageName,
            'desc' => $request->desc,
        ]);
        $request->image->move(public_path('img'), $imageName);
        return redirect()->route('product.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id){
        $data = Product::find($id);
        if (empty($data)) {
            return redirect()->route('product.index')->with('galat', 'Product not found');
        }
        return view('admin.product.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        if (empty($data)) {
            return redirect()->route('product.index')->with('galat', 'Product not found');
        }

        $request->validate([
            'name' => 'required',
            'harga' => 'required|numeric',
            'image' => 'image|mimes:jpg,png,jpeg',
            'desc' => 'required',
        ]);

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $data->update(['image' => $imageName]);
            $request->image->move(public_path('img'), $imageName);
        }

        $data->update([
            'name' => $request->name,
            'harga' => $request->harga,
            'desc' => $request->desc,
        ]);

        return redirect()->route('product.index')->with('success', 'Product Berhasil di Update');
    }

    public function destroy($id)
    {
        $data = Product::find($id);

        if (empty($data)) {
            return redirect()->route('product.index')->with('galat', 'Product not found');
        }

        $data->delete();

        return redirect()->route('product.index')->with('success', 'Product Berhasil di Hapus');
    }
}
