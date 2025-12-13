<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\Environment\Console;
use Yajra\DataTables\Facades\DataTables;

class CourierController extends Controller
{
    public function create()
    {
        return view('admin.courier.add_courier');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'company_name'   => 'required|string|max:255',
            'company_logo'   => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
            'website_link'   => 'nullable|url|max:255',
            'email'          => 'required|email|max:255',
            'contact_number' => 'required|string|max:20',
        ]);

        // Handle logo upload
        if ($request->hasFile('company_logo')) {
            $validated['company_logo'] = $request->file('company_logo')
                ->store('company_logos', 'public');
        }

        Courier::create($validated);

        return redirect()->back()->with('success', 'Company information saved successfully.');
    }
    public function index()
    {
        return view('admin.courier.index');
    }
    public function data()
    {
        $couriers = Courier::query();
        console . log($couriers);
        return DataTables::of($couriers)
            ->editColumn('company_logo', function ($row) {
                if ($row->company_logo) {
                    return '<img src="' . asset('storage/' . $row->company_logo) . '" width="50">';
                }
                return '—';
            })
            ->editColumn('website_link', function ($row) {
                return '<a href="' . $row->website_link . '" target="_blank">' . $row->website_link . '</a>';
            })
            ->rawColumns(['company_logo', 'website_link'])
            ->make(true);
    }
}
