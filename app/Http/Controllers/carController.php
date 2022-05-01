<?php

namespace App\Http\Controllers;

use App\Models\car;
use App\Models\destinatario;
use App\Models\destino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carController extends Controller
{
    public function index()
    {
        $destinos=destino::with(['cars' =>function ($query)
        {
            $query->select('destinatarios.*','cars.*','destinatarios.nombre as destinatario')
            ->join('destinatarios', 'destinatarios.id', '=', 'cars.destinatarios_id')
            ->orderByRaw("destinatarios.nombre = 'Old Dominion','FedEx','UPS' DESC ");
        }])
        ->orderBy('clasificacion','ASC')
        ->get();
        $respuesta=[];
        foreach ($destinos as $destino) {
            foreach ($destino['cars'] as  $car) {
                array_push($respuesta,[
                    'nombre'=>$car['nombre'],
                    'destino'=>$destino['ciudad'],
                    'clasificacion'=>$destino['clasificacion'],
                    'destinatario'=>$car['destinatario'],
                ]);
            }
        }
        return view('welcome', [
            'destinatarios' => destinatario::all(),
            'destinos' => destino::all(),
            'registros' => $respuesta
        ]);
        return response()->json($respuesta);
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
        car::create([
            'nombre' => $request['nombre'],
            'destinos_id' => $request['destinos_id'],
            'destinatarios_id' => $request['destinatarios_id']
        ]);

        return redirect()->route('car.index');
        // return response()->json(json_decode(json_encode($this->index()),true)['original']);
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
