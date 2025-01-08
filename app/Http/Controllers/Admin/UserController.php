<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        $users = User::role('user')->paginate(10);
        return view('admin.users.index', compact('users'));
    }
}
