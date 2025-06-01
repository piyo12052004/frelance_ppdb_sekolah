<?php

namespace App\Http\Controllers;

use App\Models\ProgramUnggulan;
use App\Models\News;
use Illuminate\Http\Request;

class ProgramUnggulanController extends Controller
{
    public function show($slug)
    {
        $program = ProgramUnggulan::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $programs = ProgramUnggulan::where('is_active', true)
            ->orderBy('order')
            ->get();

        $latestNews = News::where('is_published', true)
            ->orderBy('published_date', 'desc')
            ->take(3)
            ->get();

        return view('Module.Dashboard.program-unggulan.show', compact('program', 'programs', 'latestNews'));
    }
} 