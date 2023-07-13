<?php

namespace App\Http\Controllers\Web\Application\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.layout.main');
    }
}
