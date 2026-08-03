<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UmkmCategoryRequest;
use App\Models\UmkmCategory;

class UmkmCategoryController extends Controller
{
    public function index()
    {
        $search = request('search');

        $categories = UmkmCategory::when($search, function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%");
            })
            ->orderBy('nama')
            ->paginate(10)
            ->withQueryString();

        return view('admin.umkm-category.index', compact(
            'categories',
            'search'
        ));
    }

    public function create()
    {
        return view('admin.umkm-category.create');
    }

    public function store(UmkmCategoryRequest $request)
    {
        UmkmCategory::create($request->validated());

        return redirect()
            ->route('admin.umkm-category.index')
            ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit(UmkmCategory $umkmCategory)
    {
        return view('admin.umkm-category.edit', compact('umkmCategory'));
    }

    public function update(UmkmCategoryRequest $request, UmkmCategory $umkmCategory)
    {
        $umkmCategory->update($request->validated());

        return redirect()
            ->route('admin.umkm-category.index')
            ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(UmkmCategory $umkmCategory)
    {
        $umkmCategory->delete();

        return redirect()
            ->route('admin.umkm-category.index')
            ->with('success', 'Kategori berhasil dihapus.');
    }
}
