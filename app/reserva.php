<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agenda';
    protected $fillable = array('id', 'data_reserva_ini', 'data_reserva_fim',
                    'data_devolucao','id_veiculo','íd_usuario','km_ini', 'km_fim','os');

    public function index()
    {
        $reservas = Agenda::all();
        return view('edicao.index', ['id' => $id, 'data_reserva_ini' => $data_reserva_ini, 'data_reserva_fim' => $data_reserva_fim,
                    'data_devolucao' => $data_devolucao,'id_veiculo' => $id_veiculo,'íd_usuario' => $id_usuario,'km_ini' => $km_ini, 'km_fim' => $km_fim,'os' => $os]);
    }

}
 /*
            $table->increments('id');
            $table->string('data_reserva_ini');
            $table->string('data_reserva_fim');
            $table->string('data_devolucao');
            $table->string('id_veiculo');
            $table->string('id_usuario');
            $table->string('km_ini');
            $table->string('km_fim');
            $table->string('os');
            $table->('position');
            $table->timestamps()
*/
