<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorOng extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
	$ong = Ong::all();
	return view('index', compact('ong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouOng = $request->validate([
        'cif' => 'required|max:255',
        'nom' => 'required|max:255',
        'adreça' => 'required|max:255',
        'poblacio' => 'required|max:255',
        'comarca' => 'required|max:255',
        'tipusOng' => 'required|max:255',
        'utilitatPublica' => 'required|max:255',
	]);
	$ong = Ong::create($nouOng);

	return redirect('/ongs')->with('completed', 'Ong creada!');
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
        $ong = Ong::findOrFail($id);
	 return view('actualitza', compact('ong'));
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
		        'cif' => 'required|max:255',
		        'nom' => 'required|max:255',
	        	'adreça' => 'required|max:255',
	        	'poblacio' => 'required|max:255',
	        	'comarca' => 'required|max:255',
	       		'tipusOng' => 'required|max:255',
	       		'utilitatPublica' => 'required|max:255',
		]);

		Ong::whereId($id)->update($dades);
		return redirect('/ongs')->with('completed', 'Ong actualitzada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ong = Ong::findOrFail($id);
	return view('index', compact('ong'));

    }
}
