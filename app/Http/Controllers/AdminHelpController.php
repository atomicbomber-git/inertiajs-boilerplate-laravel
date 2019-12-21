<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AdminHelpController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function show(Request $request)
    {
        return Inertia::render("Admin/Help/Show");
    }
}
