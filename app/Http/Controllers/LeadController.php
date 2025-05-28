<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;


class LeadController extends Controller
{

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'first_name' => 'required|string|max:255',
            'message' => 'nullable|string',
            'subject'  => 'nullable|string',
        ]);

        Lead::create([
            'email' => $validated['email'],
            'post_url' => "https://webcoredigitalsolutions.com.au",
            'company_name' => "tsautomotive",
            'lead_type_id' => 1,
            'message' =>  " Name: ". $validated['first_name'] . ", Subject: ". $validated['subject'] . " | Message: " . ($validated['message'] ?? ''),
        ]);

        return redirect()->back()->with('success', 'Thanks for contacting Us!');
    }


}
