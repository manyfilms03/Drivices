<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        $users = User::where(['deleted_at' => null])->get(); 
        return view('usuarios.usuarios', ['users' => $users]);
     
    

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $usuarios = Usuario::find($id);
        // return view('usuarios.usuarios-show', ['usuarios' => $usuarios]);
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
        // $usuarios = Usuario::find($id)->delete();
        // return redirect()->route('usuarios.index')->with('success', 'Removido com sucesso!');
    }
}
