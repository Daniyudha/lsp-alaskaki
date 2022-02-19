<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin'
        ];

        return view('admin.v_admin_index', $data);
    }
}
