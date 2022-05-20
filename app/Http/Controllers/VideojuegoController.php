<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideojuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }
     
    public function index()
    {
        $videojuegos = Videojuego::With('user')->get();
        //$videojuegos = Videojuego::all();
        return view('videojuegos.indexVideojuego', compact('videojuegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videojuegos.formVideojuego');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:5|max:255',
            'precio' => 'required|min:1|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
            
        ]);

        $videojuego = new Videojuego();
        $videojuego->user_id = \Auth::id();
        $videojuego->nombre = $request->nombre;
        $videojuego->precio = $request->precio;
        $videojuego->descripcion = $request->descripcion;
        $videojuego->categoria = $request->categoria;
        $videojuego->imagen = '';
        $videojuego->save();

        $user = Auth::user();
        $user->videojuegos()->save($videojuego);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function show(Videojuego $videojuego)
    {
        return view('videojuegos.showVideojuego', compact('videojuego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function edit(Videojuego $videojuego)
    {
        return view('videojuegos.formVideojuego', compact('videojuego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videojuego $videojuego)
    {
        $request->validate([
            'nombre' => 'required|min:5|max:255',
            'precio' => 'required|min:1|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ]);

        $videojuego->nombre = $request->nombre;
        $videojuego->precio = $request->precio;
        $videojuego->descripcion = $request->descripcion;
        $videojuego->categoria = $request->categoria;
        $videojuego->imagen = '';
        $videojuego->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Videojuego  $videojuego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videojuego $videojuego)
    {
        $videojuego->delete();
        return redirect('/');
    }
}
