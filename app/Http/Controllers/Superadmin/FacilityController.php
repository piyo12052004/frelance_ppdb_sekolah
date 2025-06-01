<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::latest()->paginate(10);
        return view('Module.Dashboard.superadmin.facilities.index', compact('facilities'));
    }

    public function create()
    {
        return view('Module.Dashboard.superadmin.facilities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|in:akademik,olahraga,teknologi,penunjang',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = $request->file('image')->store('facilities', 'public');

        Facility::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imagePath
        ]);

        return redirect()->route('superadmin.facility.index')
            ->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit(Facility $facility)
    {
        return view('Module.Dashboard.superadmin.facilities.edit', compact('facility'));
    }

    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|in:akademik,olahraga,teknologi,penunjang',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($facility->image) {
                Storage::disk('public')->delete($facility->image);
            }
            $data['image'] = $request->file('image')->store('facilities', 'public');
        }

        $facility->update($data);

        return redirect()->route('superadmin.facility.index')
            ->with('success', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy(Facility $facility)
    {
        if ($facility->image) {
            Storage::disk('public')->delete($facility->image);
        }
        
        $facility->delete();

        return redirect()->route('superadmin.facility.index')
            ->with('success', 'Fasilitas berhasil dihapus.');
    }
}