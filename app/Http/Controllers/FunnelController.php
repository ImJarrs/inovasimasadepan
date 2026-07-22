<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Card;
use App\Models\CardDesign;

class FunnelController extends Controller
{
    // Card
    public function showCard(string $lang): View
    {
        $cards = Card::orderBy('created_at', 'desc')->get();
        $cardDesigns = CardDesign::orderBy('created_at', 'asc')->get();
        return view('funnel.' . $lang . '.card', [
            'title' => 'Hotel Key Cards',
            'lang' => $lang,
            'products' => $cards,
            'designs' => $cardDesigns,
        ]);
    }

    // Kiosk
    public function showKiosk(string $lang): View
    {
        $products = [
            ['id' => 1,
            'name' => 'Self Check-in Kiosk',
            'desc' => 'A Self Check-in Kiosk',
            'image-path' => 'assets/img/funnel/kiosk.jpg'],
        ];
        return view('funnel.' . $lang . '.kiosk', [
            'title' => 'IMD - Self Check-in Kiosk',
            'lang' => $lang,
            'products' => $products,
        ]);
    }
}
