<?php

namespace App\Http\Controllers;

use App\Http\Requests\FiliereRequestStore2;
use App\Http\Requests\FiliereStore;
use App\Http\Requests\FiliereStoreRequest;
use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres=Filiere::all();
        return view('filieres.index',compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FiliereRequestStore2 $request)
    {

        $dossier="images_filieres";
        $nom_image=sha1(time()).".".$request->chemin->extension();
        $request->chemin->move(public_path($dossier),$nom_image);
        $data=[];
        $data['nom']=$request->nom;
        $data['chemin']=$dossier."/".$nom_image;
        Filiere::create($data);
        return redirect()->route('filieres.index')->with('notice','Ajout effectue avec succes');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filiere=Filiere::find($id);
        return view('filieres.show',compact('filiere'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filiere=Filiere::find($id);
        return view('filieres.edit',compact('filiere'));
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
        $filiere=Filiere::find($id);
$filiere->update($request->all());
return redirect()->route('filieres.index')->with('notice','Modification effectuee avec succes');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiere=Filiere::find($id);
        $filiere->delete();
        return redirect()->route('filieres.index')->with('notice','suppression effectuee avec succes');;
    }
}
