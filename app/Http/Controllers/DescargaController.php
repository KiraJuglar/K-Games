<?php

namespace App\Http\Controllers;

use App\Models\Descarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DescargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $descarga = new Descarga();
        $descarga->videojuego_id = $request->videojuego;

        $user = Auth::user();
        $user->descargas()->save($descarga);
        $descarga->users()->save($user);

        return redirect('/videojuego');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function show(Descarga $descarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Descarga $descarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descarga $descarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Descarga  $descarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descarga $descarga)
    {
        //
    }
}
