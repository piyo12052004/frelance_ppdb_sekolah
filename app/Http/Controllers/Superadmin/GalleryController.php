<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('Module.Dashboard.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('Module.Dashboard.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/gallery'), $imageName);
            
            Gallery::create([
                'title' => $request->title,
                'description' => $request->description,
                'category' => $request->category,
                'image' => 'images/gallery/' . $imageName
            ]);
        }

        return redirect()->route('superadmin.gallery.index')
            ->with('success', 'Galeri berhasil ditambahkan');
    }

    public function edit(Gallery $gallery)
    {
        return view('Module.Dashboard.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($gallery->image && file_exists(public_path($gallery->image))) {
                unlink(public_path($gallery->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/gallery'), $imageName);
            $data['image'] = 'images/gallery/' . $imageName;
        }

        $gallery->update($data);

        return redirect()->route('superadmin.gallery.index')
            ->with('success', 'Galeri berhasil diperbarui');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image && file_exists(public_path($gallery->image))) {
            unlink(public_path($gallery->image));
        }

        $gallery->delete();

        return redirect()->route('superadmin.gallery.index')
            ->with('success', 'Galeri berhasil dihapus');
    }
} 