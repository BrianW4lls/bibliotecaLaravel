<?php

namespace App\Http\Controllers;

use App\Autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado['autores']=Autores::paginate(5);
        return view('autores.index', $listado);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosAutor=request()->all();
        $datosAutor=request()->except('_token');
        Autores::insert($datosAutor);
        return redirect('autores');
        //return response()->json($datosAutor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function show(Autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autor=Autores::findOrfail($id);
        return view('autores.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$autor=request()->all();
        $autor=request()->except(['_token', '_method']);
        //return response()->json($autor);
        //Autores::where('id', '=', $id)->update($autor);
        Autores::whereKey($id)->update($autor);
        return redirect('autores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autores  $autores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Autores::destroy($id);
        return redirect('autores');
    }

   
}
