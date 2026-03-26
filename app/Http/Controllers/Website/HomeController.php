<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $couriers = Courier::orderBy('company_name')->get();

        return view('website.main', compact('couriers'));
    }
}