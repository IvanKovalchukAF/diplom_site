<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistryController extends Controller
{
    public function registryAction() {
        return view('pages.registry');
    }
}
