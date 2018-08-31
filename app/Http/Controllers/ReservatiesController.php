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
        $reservaties = DB::table('reservaties')->join('klanten', 'reservaties.klanten_id', '=', 'klanten.id')->join('boten', 'reservaties.boten_id', '=', 'boten.id')->join('tijdsloten', 'reservaties.tijdsloten_id', '=', 'tijdsloten.id')->select('reservaties.id as reservatie_id', 'klanten.id as klanten_id', 'klanten.naam', 'klanten.voornaam','klanten.telefoon', 'klanten.email' ,'boten.aantal_plaatsen', 'tijdsloten.uur_start', 'tijdsloten.uur_eind', 'reservaties.datum', 'boten.id as boten_id')->get();

        $previous_id = '';
        $list = Array();
        $reservatie_item = Array();
        $boten = Array();
        foreach($reservaties as $item){
            if($item->klanten_id == $previous_id){
                $boten[] = $item;
            } else {
                if($previous_id == ''){

                } else {
                    $reservatie_item['boten'] = $boten;

                    $list[] = $reservatie_item;

                }
                
                $reservatie_item = Array();
                $boten = Array();
                
                $reservatie_item['klant'] = $item;
                $boten[] = $item; 
            }
            $previous_id = $item->klanten_id;
        }

        $reservatie_item['boten'] = $boten;

        $list[] = $reservatie_item;

        Log::warning($list);

        return $list;

        var_dump($list);
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
