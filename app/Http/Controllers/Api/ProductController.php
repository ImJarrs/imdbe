<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Card;
use App\Models\Wristband;
class ProductController extends Controller
{
    // RFID CARD
        public function card(){
        $cards = Card::orderBy('created_at', 'desc')->get();
        $cardBanner = Banner::orderBy('created_at', 'asc')->limit(1)->pluck('card_banner');

        return response()->json([
            'cards' => $cards,
            'cardBanner' => $cardBanner
        ]);
    }

    // RFID WRISTBAND
        public function wristband(){
        $wristbands = Wristband::orderBy('created_at', 'desc')->get();
        $wristbandBanner = Banner::orderBy('created_at', 'asc')->limit(1)->pluck('wristband_banner');

        return view('products.rfid-wristband', compact('wristbands', 'wristbandBanner'));
    }
}
