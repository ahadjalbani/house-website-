<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()

    {
        return view ('dashboard.index');
    }

    public function about()

    {
        return view ('dashboard.about');
    }

    public function service()

    {
        return view ('dashboard.service');
    }

    public function project()

    {
        return view ('dashboard.project');
    }

    public function team()

    {
        return view ('dashboard.team');
    }

    public function blog()

    {
        return view ('dashboard.blog');
    }

    public function detail()

    {
        return view ('dashboard.detail');
    }
}
