<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function pricingAction() {
        return view('pages.pricing');
    }
}


