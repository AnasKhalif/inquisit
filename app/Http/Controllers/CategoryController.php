<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Mengambil semua kategori dengan waktu
        return view('categories.index', compact('categories'));
    }

    // Halaman untuk mengedit kategori
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Update waktu kategori
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'waktu' => 'required|integer|min:60', // Validasi waktu minimal 60 detik
        ]);

        $category->update([
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('categories.index')->with('success', 'Waktu kategori berhasil diperbarui!');
    }
}
