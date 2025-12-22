<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function create()
    {
        return view('admin.terms.add_terms');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'question' => 'required|string|max:255',
            'answer'   => 'required|string',
        ]);

        Term::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Terms section saved successfully.');
    }
}
