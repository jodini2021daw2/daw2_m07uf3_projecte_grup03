<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treballador;
class ControladorTreballador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treballador = Treballador::all();
	return view('indextreballadors', compact('treballador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creatreballadors');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouTreballador = $request->validate([
        'nif' => 'required|max:255',
        'nom' => 'required|max:255',
        'cognoms' => 'required|max:255',
        'adreça' => 'required|max:255',
        'poblacio' => 'required|max:255',
        'comarca' => 'required|max:255',
        'telefonFixe' => 'required|max:255',
        'telefonMobil' => 'required|max:255',
        'email' => 'required|max:255',
        'dataIngres' => 'required|max:255',
        'professionalVoluntari' => 'required|max:255',
        'sou' => 'max:255',
        'carrec' => 'max:255',
        'seguretatSocial' => 'max:255',
        'irpf' => 'max:255',
        'edat' => 'max:255',
        'professio' => 'max:255',
        'hores' => 'max:255',

        ]);
        $treballador = Treballador::create($nouTreballador);

        return redirect('/treballadors')->with('completed', 'Treballador creat!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $treballador = Treballador::findOrFail($id);
	 return view('actualitzatreballadors', compact('treballador'));
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
        $dades = $request->validate([
        'nif' => 'required|max:255',
        'nom' => 'required|max:255',
        'cognoms' => 'required|max:255',
        'adreça' => 'required|max:255',
        'poblacio' => 'required|max:255',
        'comarca' => 'required|max:255',
        'telefonFixe' => 'required|max:255',
        'telefonMobil' => 'required|max:255',
        'email' => 'required|max:255',
        'dataIngres' => 'required|max:255',
        'professionalVoluntari' => 'required|max:255',
        'sou' => 'max:255',
        'carrec' => 'max:255',
        'seguretatSocial' => 'max:255',
        'irpf' => 'max:255',
        'edat' => 'max:255',
        'professio' => 'max:255',
        'hores' => 'max:255',

	 ]);
	 Treballador::whereId($id)->update($dades);
	 return redirect('/treballadors')->with('completed', 'Treballador actualitzat');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $treballador = treballador::findOrFail($id);
        $treballador->delete();

        return redirect('/treballadors')->with('completed', 'Treballador esborrat');    }
    }
