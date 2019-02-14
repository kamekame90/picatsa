<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vignette;
use App\User;
use Validator;

class AdminController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vignettes = Vignette::all();
      return view('admin.vignettes', ['vignettes' => $vignettes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(),[
      'legende' => 'required|min:4',
      'description' => 'required|min:10',
      'url' => 'required|min:5'
    ]);

    if($validator->fails()){
      return back()->withErrors($validator)->withInput();
    }

    $vignette = new Vignette;
    $vignette->legende = $request->legende;
    $vignette->description = $request->description;
    $vignette->url = $request->url;
    $vignette->save();

    return redirect()->route('vignettes.index')->withStatus('stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $vignette = Vignette::find($id);
      return view('admin.show', ['vignette' => $vignette]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $vignette = Vignette::find($id);
      return view('admin.edit', ['vignette' => $vignette]);
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
      $validator = Validator::make($request->all(),[
        'legende' => 'required|min:4',
        'description' => 'required|min:10',
        'url' => 'required|min:5'
      ]);

      if($validator->fails()){
        return back()->withErrors($validator)->withInput();
      }

      $vignette = Vignette::find($id);
      $vignette->legende = $request->legende;
      $vignette->description = $request->description;
      $vignette->url = $request->url;
      $vignette->save();

      return redirect()->route('vignettes.index')->withStatus('stored');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $vignette = Vignette::find($id);
      $vignette->delete();
      return redirect()->route('vignettes.index');
    }
}
