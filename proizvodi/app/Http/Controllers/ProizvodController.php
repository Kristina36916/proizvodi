<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProizvodResource;
use App\Models\Proizvod;
use Illuminate\Http\Request;
use Validator;

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
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function show($proizvod_id)
    {
        $proizvod= Proizvod::find($proizvod_id);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //
    }
}
