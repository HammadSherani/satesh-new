<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    function index() {
        $ads = Ad::paginate(10);
        return view('admin.ads.index', compact('ads'));
    }
}
