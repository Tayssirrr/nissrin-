<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Voiture;
use Exception;

class VoitureController extends Controller
{
    //

    public function index(){
        try{
            $voitures = Voiture::all();
            return view('index',compact('voitures'));
        }catch(Exception $e){
            return redirect()->back()->with('error','');
        }
    }
}
