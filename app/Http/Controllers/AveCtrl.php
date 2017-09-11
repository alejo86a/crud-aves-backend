<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tont_ave;
use App\Tont_aves_paise;

use DB;
use Validator;

class AveCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tont_ave::all();
    }
    
    public function indexPorId($id)
    {
        $respuesta['ave']=  DB::table('tont_aves')
         ->where('tont_aves.CDAVE','=',$id)
         ->select('tont_aves.*')
         ->get();
         
        for($i=0;$i<count($respuesta['ave']);$i++){
            $paises = DB::table('tont_aves_paises')
            ->where('CDAVE','=',$id)
            ->join('tont_paises','tont_aves_paises.CDPAIS','=','tont_paises.CDPAIS')
            ->join('tont_zonas','tont_paises.CDZONA','=','tont_zonas.CDZONA')
            ->select('tont_paises.CDPAIS','tont_paises.DSNOMBRE','tont_zonas.DSNOMBRE as CDZONA')
            ->get();
            $respuesta['ave'][$i]->paises = $paises;
            $p['paises'] = $paises;
        }
        
        return $respuesta['ave'];
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
        date_default_timezone_set('America/Bogota');
            Tont_ave::create([
                'CDAVE'=>$request->input('CDAVE'),
                'DSNOMBRE_COMUN'=>$request->input('DSNOMBRE_COMUN'),
                'DSNOMBRE_CIENTIFICO'=>$request->input('DSNOMBRE_CIENTIFICO'),
            ]);
            
            for($i = 0;$i<count($request->input('paises'));$i++){
                Tont_aves_paise::create([
                    'CDAVE'=>$request->input('CDAVE'),
                    'CDPAIS'=>$request->input('paises')[$i]['CDPAIS'],
                ]);
            }
            $ave = Tont_ave::where('CDAVE','=',$request->input('CDAVE'))->first();
            return $ave;
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
        DB::table('tont_aves_paises')
         ->where('tont_aves_paises.CDAVE','=',$id)
         ->delete();
        DB::table('tont_aves')
         ->where('tont_aves.CDAVE','=',$id)
         ->delete();
         return "OK";
    }
}
