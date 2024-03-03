<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    public function settings(Request $request): View
    {
        return view('settings.index', ['user' => $request->user(),]);
    }
}
