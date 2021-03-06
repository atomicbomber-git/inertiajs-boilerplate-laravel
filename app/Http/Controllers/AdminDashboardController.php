<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return Inertia::render('Admin/Dashboard/Show', [
            'message' => 'helloworld'
        ]);
    }
}
