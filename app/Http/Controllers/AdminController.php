<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth')->except(['login', 'authenticate', 'logout']);
    }

    public function index()
    {
        $users = User::all();
        return view('dashboard.main', compact('users'));
    }

    public function users()
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    public function cadastrar()
    {
        return view('dashboard.cadastrar');
    }

    public function login()
    {
        if (session('admin')) {
            return redirect()->route('admin.home');
        }
        return view('dashboard.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($request->username == 'admin' && $request->password == 'root123') {
            session(['admin' => true]);
            return redirect()->route('admin.home');
        }

        return redirect()->route('admin.login')->with('error', 'Usuário ou senha inválidos.');
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('admin.login');
    }
}