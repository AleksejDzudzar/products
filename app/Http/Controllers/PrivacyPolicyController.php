<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function edit()
    {
        $policy = PrivacyPolicy::firstOrCreate([], ['content' => 'Default Privacy Policy content']);
        return view('privacy-policy.edit', compact('policy'));
    }

    public function update(Request $request)
    {

        $attributes = $request->validate([
            'content' => 'required|string',
        ]);

        $policy = PrivacyPolicy::first();
        if ($policy) {
            $policy->update($attributes);
        } else {
            PrivacyPolicy::create($attributes);
        }

        return redirect()->route('privacy-policy.edit');
    }


}

