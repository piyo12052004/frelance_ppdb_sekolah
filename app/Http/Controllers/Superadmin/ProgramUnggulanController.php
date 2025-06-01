<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\ProgramUnggulan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramUnggulanController extends Controller
{
    public function index()
    {
        $programs = ProgramUnggulan::orderBy('order')->paginate(10);
        return view('Module.Dashboard.program-unggulan.index', compact('programs'));
    }

    public function create()
    {
        return view('Module.Dashboard.program-unggulan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_active' => 'boolean',
            'order' => 'integer|min:0'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/programs'), $imageName);
            $data['image'] = 'images/programs/' . $imageName;
        }

        ProgramUnggulan::create($data);

        return redirect()->route('superadmin.program-unggulan.index')
            ->with('success', 'Program Unggulan berhasil ditambahkan');
    }

    public function edit(ProgramUnggulan $programUnggulan)
    {
        return view('Module.Dashboard.program-unggulan.edit', compact('programUnggulan'));
    }

    public function update(Request $request, ProgramUnggulan $programUnggulan)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'is_active' => 'boolean',
            'order' => 'integer|min:0'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($programUnggulan->image) {
                $oldImagePath = public_path($programUnggulan->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/programs'), $imageName);
            $data['image'] = 'images/programs/' . $imageName;
        }

        $programUnggulan->update($data);

        return redirect()->route('superadmin.program-unggulan.index')
            ->with('success', 'Program Unggulan berhasil diperbarui');
    }

    public function destroy(ProgramUnggulan $programUnggulan)
    {
        // Delete image if exists
        if ($programUnggulan->image) {
            $imagePath = public_path($programUnggulan->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $programUnggulan->delete();

        return redirect()->route('superadmin.program-unggulan.index')
            ->with('success', 'Program Unggulan berhasil dihapus');
    }
} 