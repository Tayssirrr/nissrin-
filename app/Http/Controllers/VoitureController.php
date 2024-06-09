<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoitureRequest;
use App\Http\Requests\UpdateVoitureRequest;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $voitures = Voiture::all();
        return view("web.Home",compact('voitures'));
    }
    public function table(){
        $voitures = Voiture::all();
        return view("admin.voitures.table",compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.voitures.add");
    }


    public function reserver(Voiture $voiture){
        return view("web.Reserver",compact("voiture"));
    }

    public function fomrlogin(){
        return view('admin.login.index');
    }


    public function login(Request $request){
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->intended('admin')->with('message', 'Signed in!');
            }

            return redirect()->route('form')->with('message', 'Login details are not valid!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    public function signOut()
    {
        try {
            Session::flush();
            Auth::logout();
            return redirect()->route('form');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'titre' => 'required',
                'price' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $input = $request->all();
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }

            Voiture::create($input);


            return redirect()->route('table')->with('success', 'Portfolio created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        return view("admin.voitures.edit",compact('voiture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        try {
            $request->validate([
                'titre' => 'required',
                'price' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
        $voiture->update($input);
        return redirect()->route('table')->with('success', 'Voiture update successfully.');

    }catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
    }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect()->route('table')->with('success', 'Voiture delete successfully.');
    }
}
