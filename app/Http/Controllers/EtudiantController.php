<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantStore;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Livre;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filieres = Filiere::all();
        return view('etudiants.create', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtudiantStore $request)
    {        Etudiant::create($request->all());
        return redirect()->route('etudiants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::find($id);
        return view('etudiants.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::find($id);
        $filieres = Filiere::all();
        return view('etudiants.edit', compact('etudiant', 'filieres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->update($request->all());
        return redirect()->route('etudiants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect()->route('etudiants.index');
    }

    //les emprunts des etudiants

    function emprunter()
    {
        $etudiants = Etudiant::all();
        $livres = Livre::all();
        return view('emprunts.emprunter', compact('etudiants', 'livres'));
    }
    function store_emprunter(Request $request)
    {
       $etudiant=Etudiant::find($request->etudiant_id);
       $etudiant->livres()->attach($request->livre_id,['date_emprunt'=>now(),'date_retour'=>null]);
        return redirect()->route('etudiants.show',$etudiant->id)->with('notice','emprunt effectue avec succes');
    }
}
