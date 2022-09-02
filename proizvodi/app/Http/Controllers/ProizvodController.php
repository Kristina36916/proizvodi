<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProizvodResource;
use App\Models\Proizvod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DB;

class ProizvodController extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proizvodi = Proizvod::all();
        return ProizvodResource::collection($proizvodi);
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
     * 
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:255',
            'opis' => 'required|string|max:255',
            'cena' => 'required|string',
            'rok' => 'required|date',
            'kategorija_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $proizvod = Proizvod::create([
            'naziv' => $request->naziv,
            'opis' => $request->opis,
            'cena' => $request->cena,
            'rok' => $request->rok,
            'kategorija_id' => $request->kategorija_id,
            'user_id' => Auth::user()->id,
        ]);

        return response()->json(['Proizvod je uspesno kreiran.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proizvod= Proizvod::find($id);
        if(is_null($proizvod)){
            return response()->json('Data not found ',404);
        }
        return response()->json($proizvod);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function edit(Proizvod $proizvod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:255',
            'opis' => 'required|string|max:255',
            'cena' => 'required|string',
            'rok' => 'required|date',
            'kategorija_id' => 'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());
            $naziv = $request->input('naziv');
            $opis = $request->input('opis');
            $cena = $request->input('cena');
            $rok = $request->input('rok');
            $kategorija_id = $request->input('kategorija_id');

            DB::table('proizvods')
            ->where('id', $id)
            ->update(['naziv' => $naziv, 'opis' => $opis, 'cena'=>$cena,'rok'=>$rok,'kategorija_id'=>$kategorija_id]);
    
            return response()->json(['Proizvod je uspesno izmenjen.']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from proizvods where id = ?',[$id]);
      return response()->json('Proizvod je uspesno obrisan!');
        

    }
}
