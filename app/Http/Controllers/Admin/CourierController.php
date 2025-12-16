<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
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
        $validated = $request->validate([
            'company_name'   => 'required|string|max:255',
            'company_logo'   => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
            'website_link'   => 'nullable|url|max:255',
            'email'          => 'required|email|max:255',
            'contact_number' => 'required|string|max:20',
        ]);

        if ($request->hasFile('company_logo')) {
            $validated['company_logo'] = $request->file('company_logo')
                ->store('company_logos', 'public');
        }

        Courier::create($validated);

        return redirect()
            ->route('courier.index')
            ->with([
                'alert_type' => 'success',
                'alert_title' => 'Success',
                'alert_message' => 'Company information saved successfully.'
            ]);
    }
    public function index()
    {
        return view('admin.courier.index');
    }
    public function data()
    {
        return DataTables::of(
            Courier::select([
                'id',
                'company_name',
                'company_logo',
                'website_link',
                'email',
                'contact_number'
            ])
        )
            ->editColumn('company_logo', function ($row) {
                return $row->company_logo
                    ? '<img src="' . asset('storage/' . $row->company_logo) . '" width="40" loading="lazy">'
                    : '—';
            })
            ->editColumn('website_link', function ($row) {
                return '<a href="' . $row->website_link . '" target="_blank" rel="noopener">' . $row->website_link . '</a>';
            })
            ->rawColumns(['company_logo', 'website_link'])
            ->make(true);
    }
    public function destroy($id)
    {
        try {
            $courier = Courier::findOrFail($id);

            if ($courier->company_logo && Storage::disk('public')->exists($courier->company_logo)) {
                Storage::disk('public')->delete($courier->company_logo);
            }

            $courier->delete();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete courier.'
            ], 500);
        }
    }
    public function edit($id)
    {
        $courier = Courier::findOrFail($id);

        return response()->json([
            'id' => $courier->id,
            'company_name' => $courier->company_name,
            'email' => $courier->email,
            'contact_number' => $courier->contact_number,
            'website_link' => $courier->website_link,
            'company_logo' => $courier->company_logo
                ? asset('storage/' . $courier->company_logo)
                : null,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact_number' => 'nullable|string',
            'website_link' => 'nullable|url',
            'company_logo' => 'nullable|image|max:2048',
        ]);

        $courier = Courier::findOrFail($id);

        if ($request->hasFile('company_logo')) {
            $path = $request->file('company_logo')->store('couriers', 'public');
            $courier->company_logo = $path;
        }

        $courier->update($request->except('company_logo'));

        return response()->json(['success' => true]);
    }
}
