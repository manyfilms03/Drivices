<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use App\Http\Requests\StoreProfessionalRequest;
use App\Http\Requests\UpdateProfessionalRequest;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professionals = Professional::all();
        return view('professionals.professionals', ['professionals' => $professionals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professionals.professionals-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfessionalRequest $request)
    {

        $existe = Professional::where('user_id', '=' , $request->user_id);
        if($existe){
            return redirect()->route('professionals.index');
        }else{
        $professional = Professional::create([
            'user_id' => $request->user_id,
            'biografia' => $request->biografia,
            'nota' => '5.0',
            'stripe' => '1',

        ]); 

        $professional->save();
        }
        return redirect()->route('professionals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professional $professional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfessionalRequest $request, Professional $professional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professional $professional)
    {
        //
    }
}
