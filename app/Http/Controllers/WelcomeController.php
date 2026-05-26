<?php

namespace App\Http\Controllers;

use OffloadProject\Toggle\Facades\Toggle;

class WelcomeController extends Controller
{
    public function index() 
    {
        $featureToggleName = '';
        if (Toggle::active('example-one')) {
            $featureToggleName = __('Example one');
        }
        if (Toggle::active('example-two')) {
            $featureToggleName = __('Example two');
        }
        return view('welcome', compact('featureToggleName'));
    }
}
