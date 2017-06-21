<?php

namespace App\Http\Controllers;

use App\Klant;
use Illuminate\Http\Request;

class KlantController extends Controller
{
    
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klanten = Klant::all();
        
        return view("admin.klanten.list", compact("klanten"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.klanten.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "naam" => "required",
            "adres" => "required",
        ]);
        
        Klant::create([
            "naam" => $request->naam,
            "adres" => $request->adres,
            "reputatie" => isset($request->reputatie),
        ]);
        
        return redirect("klant");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function show(Klant $klant)
    {
        return view("admin.klanten.show", compact("klant"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function edit(Klant $klant)
    {
        return view("admin.klanten.update", compact("klant"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klant $klant)
    {
        $this->validate($request, [
            "naam" => "required",
            "adres" => "required",
        ]);
        
        $klant->update($request->only(["naam", "adres"]));
        
        return redirect("klant/" . $klant->id);
    }
    
    public function updatePassword(Request $request, Klant $klant)
    {
        $this->validate($request, ["password" => "required"]);
        
        $klant->password = $request->password;
        $klant->update();
        
        return "succes";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Klant  $klant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klant $klant)
    {
        $klant->delete();
        
        return redirect("klant");
    }
}
