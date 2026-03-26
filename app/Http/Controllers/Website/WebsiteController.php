<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function productTrack($slug, $tracking_number = null)
    {
        $courier = Courier::where('slug', $slug)->firstOrFail();

        return view('website.product_details', compact('courier', 'tracking_number'));
    }
}
