<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class KlantenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klanten = DB::table('klanten')->get();

        return $klanten;
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
        Log::warning($request);
        DB::table('klanten')->insert(['voornaam' =>$request['voornaam'], 'opmerkingen'=>$request['opmerkingen'], 'naam'=>$request['naam'],'telefoon'=>$request['telefoon'], 'email'=>$request['email'], 'companies_id'=>$request['companies_id'], 'created_at'=>Carbon::now(),
        'vat'=>$request['vat'], 'company_name'=>$request['company_name'], 'street'=>$request['street'], 'number'=>$request['number'], 'zip'=>$request['zip'], 'city'=>$request['city'], 'country'=>$request['country']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $klanten = DB::table('klanten')->where(‘id’, $id)->get();
        return $klanten;
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
