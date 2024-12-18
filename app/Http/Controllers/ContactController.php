<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function admin()
    {
        $messages = Contact::orderBy('created_at', 'desc')->paginate(10);

        return view('contact.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'poruka' => 'required|string',
            'obavestenja' => 'nullable|boolean',
        ]);

        Contact::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'email' => $request->email,
            'poruka' => $request->poruka,
            'obavestenja' => $request->has('obavestenja'),
        ]);

        return back()->with('success', 'Vaša poruka je poslata.');
    }

    public function newsletters()
    {
        $user = User::All();
        return view('newsletters.index', compact('user'));
    }

}
