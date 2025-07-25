<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function create()
    {
        return view('contact.contacts');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|min:5',
        ]);

        // Untuk latihan: tampilkan data saja
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
