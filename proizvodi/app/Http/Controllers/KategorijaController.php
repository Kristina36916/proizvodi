<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Kategorija::all();
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,['naziv'=>'required']);
    $kategorija=new Kategorija();
    $kategorija->naziv=$request->naziv;
    $kategorija->opis=$request->opis;
    $kategorija->url=$request->url;
    $kategorija->prezentacija_id = prezentacija()->id;
    $kategorija->save();
    return redirect('/kategorije');
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
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorija $kategorija)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorija $kategorija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorija $kategorija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorija $kategorija)
    {
        //
    }
}
