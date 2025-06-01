<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('Module.News.index', compact('news'));
    }

    public function create()
    {
        return view('Module.News.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'published_date' => 'required|date',
            'is_published' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $imageName);
            
            News::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
                'image' => 'images/news/' . $imageName,
                'published_date' => $request->published_date,
                'is_published' => $request->is_published ?? true
            ]);
        }

        return redirect()->route('Module.News.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function show(News $news)
    {
        return view('Module.Dashboard.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('Module.News.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'published_date' => 'required|date',
            'is_published' => 'boolean'
        ]);

        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'published_date' => $request->published_date,
            'is_published' => $request->is_published ?? true
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($news->image && file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $imageName);
            $data['image'] = 'images/news/' . $imageName;
        }

        $news->update($data);

        return redirect()->route('Module.News.index')
            ->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(News $news)
    {
        if ($news->image && file_exists(public_path($news->image))) {
            unlink(public_path($news->image));
        }

        $news->delete();

        return redirect()->route('Module.News.index')
            ->with('success', 'Berita berhasil dihapus');
    }
} 