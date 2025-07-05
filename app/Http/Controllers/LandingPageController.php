<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Facility;
use App\Models\ProgramUnggulan;
use Illuminate\Http\Request;
use App\Models\Message;

class LandingPageController extends Controller
{
    public function index()
    {
        $latestNews = News::where('is_published', true)
            ->orderBy('published_date', 'desc')
            ->take(3)
            ->get();

        $programUnggulan = ProgramUnggulan::latest()->take(6)->get();

        $fasilitas = Facility::latest()->get();

        $gallery = Gallery::latest()->take(6)->get();

        $messages = Message::all();

        return view('Module.Dashboard.main', compact('latestNews', 'programUnggulan', 'fasilitas', 'gallery','messages'));
    }
}
