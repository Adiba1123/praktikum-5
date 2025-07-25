<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
   public function create()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|min:5',
            'role' => 'required|in:Super Admin,Kasir',
        ]);

        // Untuk latihan: tampilkan data saja
        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
