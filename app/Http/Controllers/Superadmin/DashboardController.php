<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Gallery;
use App\Models\User;
use App\Models\CalonSiswa;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalNews' => News::count(),
            'totalGallery' => Gallery::count(),
            'totalUsers' => User::count(),
            'totalStudents' => CalonSiswa::count(),
            'recentNews' => News::latest()->take(5)->get(),
            'recentGallery' => Gallery::latest()->take(5)->get(),
        ];

        return view('Module.Dashboard.superadmin.index', $data);
    }
} 