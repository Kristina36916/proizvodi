<?php

namespace App\Http\Controllers;
use App\Models\Prezentacija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PrezentacijaResource;
use DB;

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
    
     public function izmena(Request $request,$id)
     {
         $input=$request->all();
         $validator=Validator::make($input,['naziv','mesto','vreme']);
         $prezentacija= new Prezentacija;
         if($validator->fails()){
             return response()->json($validator->erorrs());
            }else{
                $naziv=$request->input('naziv');
                $mesto=$request->input('mesto');
                $vreme=$request->input('vreme');
               /* $prezentacija->naziv=$request->naziv;
                $prezentacija->mesto=$request->mesto;
                $prezentacija->vreme=$request->vreme;*/
                DB::table('prezentacijas')
    ->where('id', $id)
    ->update(['naziv' => $naziv, 'mesto' => $mesto, 'vreme'=>$vreme]);

               
            }
            return response()->json(['Post is updated successfully.']);
        
     } 
     function pretraga($naziv){
        return Prezentacija::where('naziv','Like',"%$naziv%")->get();
    }
    function vidiPrezentaciju($naziv){
        return Prezentacija::find($naziv);
    }
    
}
