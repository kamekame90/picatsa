<?php

namespace App\Http\Controllers;

use App\Vignette;
use Illuminate\Http\Request;

class VignetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vignettes = Vignette::all();
      //dump($vignettes);
      return view('index', ['vignettes' => $vignettes]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function show($id_vignette)
    {
      $vignette = Vignette::find($id_vignette);
      //dump($vignette);
      return view('show', ['vignette' => $vignette]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function edit(Vignette $vignette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vignette $vignette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vignette  $vignette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vignette $vignette)
    {
        //
    }
}
