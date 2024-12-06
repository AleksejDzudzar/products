<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function newsletters(){
        $user = User::All();
        return view('newsletters.index',compact('user'));
    }

}
