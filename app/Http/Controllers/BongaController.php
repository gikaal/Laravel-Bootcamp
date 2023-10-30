<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Bonga;
use Illuminate\Http\Request;

class BongaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View 
    {
        return view('Bonga.index');
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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $request->user()->Bonga()->create($validated);
 
        return redirect(route('Bonga.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Bonga $bonga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bonga $bonga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bonga $bonga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bonga $bonga)
    {
        //
    }
}
