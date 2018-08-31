<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ReservatiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reservaties = DB::table('reservaties')->select('reservaties.*')->get();
        $reservaties = DB::table('reservaties')->join('klanten', 'reservaties.klanten_id', '=', 'klanten.id')->join('boten', 'reservaties.boten_id', '=', 'boten.id')->join('tijdsloten', 'reservaties.tijdsloten_id', '=', 'tijdsloten.id')->select('reservaties.id', 'klanten.id', 'klanten.naam', 'klanten.voornaam','klanten.telefoon', 'klanten.email' ,'boten.aantal_plaatsen', 'tijdsloten.uur_start', 'tijdsloten.uur_eind', 'reservaties.datum', 'boten.id')->get();

        return $reservaties;

        var_dump($reservaties);
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
     */
    public function store(Request $request)
    {

        $customer = DB::table('klanten')->select('id')->orderBy('id', 'desc')->first();
        $klant = $customer->id;
        foreach($request['boten_id'] as $boot){
            DB::table('reservaties')->insert(['boten_id' =>$boot, 'klanten_id'=>$klant,'tijdsloten_id'=>$request['tijdsloten_id'], 'datum'=>$request['datum'],'created_at'=>Carbon::now()]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
