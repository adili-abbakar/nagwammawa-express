<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about()
    {
        $company = CompanyInfo::first() ?? CompanyInfo::factory()->create();
        return view('public.about', compact('company'));
    }
}
