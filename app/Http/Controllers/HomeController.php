<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $homeBanner = Banner::where('type', 'home_banner')->latest()->first();
        $promoBanners = Banner::where('type', 'promo_banner')->orderBy('created_at', 'desc')->get();

        return response()->json([
            'homeBanner' => $homeBanner,
            'promoBanners' => $promoBanners,
        ]);
    }
}