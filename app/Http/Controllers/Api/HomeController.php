<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class HomeController extends Controller
{
    // ... (fungsi index dan storeContact yang sudah ada bisa tetap di sini) ...

    /**
     * Menyediakan data untuk halaman utama baru (v2).
     */
    public function getHomePageDataV2()
    {
        // Mengambil banner utama, di-pluck agar hanya mendapatkan path gambar
        $homeBanner = Banner::where('type', 'home_banner')
            ->latest()
            ->limit(1) // Hanya ambil satu banner utama
            ->pluck('image')
            ->map(function ($image, $index) {
                return ['id' => $index, 'image' => $image]; // Beri ID sementara
            });

        // Mengambil banner promo, di-pluck agar hanya mendapatkan path gambar
        $promoBanner = Banner::where('type', 'promo_banner')
            ->orderBy('created_at', 'desc')
            ->pluck('image')
            ->map(function ($image, $index) {
                return ['id' => $index, 'image' => $image]; // Beri ID sementara
            });

        return response()->json([
            'homeBanner' => $homeBanner,
            'promoBanner' => $promoBanner,
        ]);
    }
}