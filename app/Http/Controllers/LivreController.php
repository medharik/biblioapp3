<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivreRequest;
use App\Http\Requests\LivreRequestStore;
use App\Http\Requests\LivreStoreRequest;
use App\Http\Requests\LivreUpdateRequest;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres=Livre::all();
        return view('livres.index',compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
$dossier="youssef";
$nom=md5(time()).'.'.$request->photo->extension();
$request->photo->move(public_path($dossier),$nom);
$data=$request->all();
$data['photo']=$dossier.'/'.$nom;
        Livre::create($data);
        return redirect()->route('livres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livre=Livre::find($id);
        return view('livres.show',compact('livre'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livre=Livre::find($id);
        return view('livres.edit',compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LivreUpdateRequest $request, $id)
    {
        $livre=Livre::find($id);
$livre->update($request->all());
return redirect()->route('livres.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livre=Livre::find($id);
        $livre->delete();
        return redirect()->route('livres.index');
    }
}
