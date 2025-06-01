<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:kegiatan,fasilitas,prestasi',
            'is_published' => 'boolean'
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category' => $request->category,
            'is_published' => $request->is_published ?? true
        ]);

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil ditambahkan');
    }

    public function edit(Gallery $gallery)
    {
        return view('Module.Dashboard.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|in:kegiatan,fasilitas,prestasi',
            'is_published' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($gallery->image);
            // Store new image
            $imagePath = $request->file('image')->store('gallery', 'public');
            $gallery->image = $imagePath;
        }

        $gallery->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'is_published' => $request->is_published ?? true
        ]);

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil diperbarui');
    }

    public function destroy(Gallery $gallery)
    {
        // Delete image from storage
        Storage::disk('public')->delete($gallery->image);
        // Delete record from database
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Foto berhasil dihapus');
    }
} 