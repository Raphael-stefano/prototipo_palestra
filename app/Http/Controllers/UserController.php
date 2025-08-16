<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'telephone' => 'required|digits:11',
        ]);

        $partes = [
            'ddd' => substr($validated['telephone'], 0, 2),
            'inicio' => substr($validated['telephone'], 2, 7),
            'fim' => substr($validated['telephone'], 7)
        ];

        $validated['telephone'] = "({$partes['ddd']}) {$partes['inicio']}-{$partes['fim']}";

        User::create($validated);

        if(session('admin')){
            return redirect()->route('admin.home')
            ->with('success', 'Cadastro realizado com sucesso!');
        }

        return redirect()->route('pages.group')
            ->with('success', 'Cadastro realizado com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
