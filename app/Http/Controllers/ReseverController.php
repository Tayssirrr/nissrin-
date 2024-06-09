<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReseverRequest;
use App\Http\Requests\UpdateReseverRequest;
use App\Models\Resever;
use Illuminate\Http\Request;
use App\Models\Voiture;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ReseverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $resou = Resever::all();
        return view("admin.reserver.table", compact("resou"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Voiture $voiture)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|max:20',
            'email' => 'required|string|email|max:255',
            'carteNationale' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date_debut' => 'required|date|after_or_equal:today',
            'date_fin' => 'required|date|after:date_debut',
        ]);
        $input = $request->all();
        if ($image = $request->file('carteNationale')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['carteNationale'] = "$profileImage";
        }


        Resever::create([
            'nameVoiture' => $voiture->titre,
            'name' => $input['name'],
            'prenom' => $input['prenom'],
            'telephone' => $input['telephone'],
            'email' => $input['email'],
            'carteNationale' => $input['carteNationale'],
            'date_debut' => $input['date_debut'],
            'date_fin' => $input['date_fin'],
        ]);


        return redirect()->route('home')->with('success', 'Reservation confirmed successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Resever $resever)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resever $resever)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReseverRequest $request, Resever $resever)
    {
        //
    }

    public function downloadImage($filename)
    {
        $path = public_path('images/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return Response::download($path);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resever $resever)
    {
        //
        $resever->delete();
        return redirect()->route('tablers')->with('success', 'Reservation confirmed successfully!');

    }
}
