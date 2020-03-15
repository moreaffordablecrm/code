<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email',
        ]);

        $response = \Zttp\Zttp::post('https://api.convertkit.com/v3/forms/1260004/subscribe', [
            'api_key' => config('convertkit.api_key'),
            'email'   => request('email'),
        ]);

        return response('success');
    }
}
