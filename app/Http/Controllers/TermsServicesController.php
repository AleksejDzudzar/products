<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use App\Models\TermsServices;
use Illuminate\Http\Request;

class TermsServicesController extends Controller
{
    public function edit()
    {
        $terms = TermsServices::firstOrCreate([],['content'=>'Default Terms & Conditions']);

        return view('terms-services.edit', compact('terms'));
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'content' => 'required|string',
        ]);

        $terms = TermsServices::first();
        if ($terms) {
            $terms->update($attributes);
        } else {
            PrivacyPolicy::create($attributes);
        }
        return redirect()->route('terms-services.edit');
    }
}




