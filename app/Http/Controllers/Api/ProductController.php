<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\Card;

class ProductController extends Controller
{
    public function card(){
        $cards = Card::orderBy('created_at', 'desc')->get();
        $cardBanner = Banner::orderBy('created_at', 'asc')->value('card_banner');

        return response()->json([
            'cards' => $cards,
            'cardBanner' => $cardBanner
        ]);
    }
}
