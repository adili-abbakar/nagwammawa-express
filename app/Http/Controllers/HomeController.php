<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $company = CompanyInfo::first() ?? CompanyInfo::factory()->create();

        return view('public.home', compact('company'));
    }
}
