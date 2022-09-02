<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\KategorijaResource;

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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:255',
            'mesto' => 'required|string|max:100'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $kategorija = Kategorija::create([
            'naziv' => $request->naziv,
            'mesto' => $request->mesto,
            'vreme' => $request->vreme
        ]);

        return response()->json(['Kategorija je uspesno kreirana.', new KategorijaResource($kategorija)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorija $kategorija)
    {
        return new KategorijaResource($kategorija);
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:255',
            'mesto' => 'required|string|max:100'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $kategorija->naziv = $request->naziv;
        $kategorija->mesto = $request->mesto;
        $kategorija->vreme = $request->vreme;

        $kategorija->save();

        return response()->json(['Kategorija je uspesno izmenjena.', new KategorijaResource($kategorija)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorija $kategorija)
    {
        $kategorija->delete();

        return response()->json('Kategorija je uspesno obrisana.');
    }
}
