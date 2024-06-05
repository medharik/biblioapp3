<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivreRequest;
use App\Http\Resources\LivreRessource;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LivreRessource::collection(Livre::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivreRequest $request)
    {
    $livre=    Livre::create($request->validated());
return new LivreRessource($livre);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
        return new LivreRessource($livre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livre $livre)
    {
        $livre->update($request->validated());
        return new LivreRessource($livre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livre $livre)
    {
        $livre->delete();
        return response()->noContent();
    }
}
