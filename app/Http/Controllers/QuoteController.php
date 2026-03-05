<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('quote.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quote.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'pickup_location' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'weight' => 'required|numeric',
            'service_type' => 'required|string|max:255',
            'cargo_type' => 'required|string|max:255',
            'dimension' => 'nullable|string|max:255',
            'pickup_date' => 'required|date_format:Y-m-d',
            'delivery_date' => 'nullable|date_format:Y-m-d|after_or_equal:pickup_date',
            'special_instructions' => 'nullable|string|max:4000',
            'special_document' => 'nullable|file|mimes:pdf,doc,docx,png,jpg,jpeg|max:5120',
        ]);


        if ($request->hasFile('special_document')) {
            $validated['special_document'] = $request->file('special_document')->store('quotes');
        }

        Quote::create($validated);

        return redirect()->route('home')->with('success', 'Quote succssfully requested');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
