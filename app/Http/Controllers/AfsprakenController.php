<?php

namespace App\Http\Controllers;

use App\Afspraak;
use App\Klant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AfsprakenController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Klant $klant
     * @return \Illuminate\Http\Response
     */
    public function create(Klant $klant)
    {
        return view("admin.klanten.afspraken.create", compact("klant"));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param Klant $klant
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Klant $klant, Request $request)
    {
        $this->validate($request, [
            "datum" => "required|date_format:d/m/Y",
            "opmerkingen" => "required",
            "tijd" => "required|numeric"
        ]);
        // request is valid
        
        $klant->afspraken()->create([
            "opmerkingen" => $request->opmerkingen,
            "datum" => Carbon::createFromFormat("d/m/Y", $request->datum),
            "tijd" => $request->tijd,
        ]);
        
        return redirect("klant/" . $klant->id)->with(["flash_message" => "De afspraak is succesvol aangemaakt!"]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param Klant $klant
     * @param Afspraak $afspraak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klant $klant, Afspraak $afspraak)
    {
        $afspraak->delete();
        
        return redirect()->back()->with(["flash_message" => "De afspraak is verwijderd."]);
    }
}
