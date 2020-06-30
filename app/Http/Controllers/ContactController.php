<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $req) {
        $validation = $req->validate([
            'subject' => 'required|min:3|max:50'
        ]);
        dd($req->input('subject'));
    }
}
