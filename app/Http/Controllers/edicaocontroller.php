<?php

namespace App\Http\Controllers;
use DB;
use App\Agenda;
use Illuminate\Http\Request;
use App\Http\Requests;

class edicaocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request) {
        $data_filtro = $request->get('id_insercao');
        $reservas = DB::table('agenda')
        ->where('id','=',"$data_filtro")
        ->get();
        return view('edicao', compact('reservas'));
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
        $agenda = new Agenda;
        $agenda->data_reserva_ini = $request->input('data_reserva_ini');
        $agenda->data_reserva_fim = $request->input('data_reserva_fim');
        $agenda->data_devolucao = $request->input('data_devolucao');
        $agenda->id_veiculo = $request->input('id_veiculo');
        $agenda->id_usuario = $request->input('id_usuario');
        $agenda->km_ini = $request->input('km_ini');
        $agenda->km_fim = $request->input('km_fim');
        $agenda->os = $request->input('os');
        $agenda->save();
        return 'Registro inserido com sucesso. ID: ' . $agenda->id;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Agenda::find($id);
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
        $agenda = Agenda::find($id);
        $agenda->data_reserva_ini = $request->input('data_reserva_ini');
        $agenda->data_reserva_fim = $request->input('data_reserva_fim');
        $agenda->data_devolucao = $request->input('data_devolucao');
        $agenda->id_veiculo = $request->input('id_veiculo');
        $agenda->id_usuario = $request->input('id_usuario');
        $agenda->km_ini = $request->input('km_ini');
        $agenda->km_fim = $request->input('km_fim');
        $agenda->os = $request->input('os');
        $agenda->save();

        return "Dados atualizados com sucesso!" . $agenda->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda =  Agenda::find($id);
        $agenda->delete();
        return "Registro removido com sucesso!" . $id;
    }
}
