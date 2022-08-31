<?php

namespace App\Http\Controllers;

use App\Models\Prezentacija;
use Illuminate\Http\Request;

class PrezentacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dodajPrezentaciju(Request $req){
        $prezentacija=new Prezentacija;
        $prezentacija->naziv=$req->input('naziv');
        $prezentacija->mesto=$req->input('mesto');
        $prezentacija->vreme=$req->input('vreme');
        $prezentacija->save();
        return response()->json($prezentacija);


    }
    function listaPrezentacija(){

        return Prezentacija::all();
    }
    function obrisiPrezentaciju($id){
        $result=Prezentacija::where('id',$id)->delete();
        if($result){
            return ["Uspesno obrisana prezentacija."];
        }else{
            return ["Greska prilikom brisanja."];
        }
    }
    
     public function izmena(Request $request, Prezentacija  $prezentacija)
     {
        $input=$request->all();
            $validator=Validator::make($input,['naziv','opis',]);
    
        if($validator->fails()){
            return 'Greska.';
        }else{
            $prezentacija->naziv=$input['naziv'];
            $prezentacija->mesto=$input['mesto'];
            $prezentacija->vreme=$req->input('vreme');
            $prezentacija->save();
            }
        return $this->sendResponse(new Prezentacija($prezentacija,'Izmena prezentacije uspesna.'));
     }
}
