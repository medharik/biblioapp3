<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EtudiantRequest;
use App\Http\Resources\EtudiantResource;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EtudiantResource::collection(Etudiant::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtudiantRequest $request)
    {
        // var_dump ($request->all());
        // dd();
       $etudiant= Etudiant::create($request->validated());
return new EtudiantResource($etudiant);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(int  $id)
    {
        return new EtudiantResource(Etudiant::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(EtudiantRequest $request, int  $id)
    {
        $etudiant=Etudiant::find($id);
        // echo ($etudiant->nom);
        // dd();
        $etudiant->update($request->validated());
        return new EtudiantResource($etudiant);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(int  $id)
    {
        Etudiant::find($id)->delete();
        return response()->noContent();
        //
    }
}
