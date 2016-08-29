<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agenda';
    protected $fillable = array('id', 'data_reserva_ini', 'data_reserva_fim',
                                'data_devolucao','id_veiculo','íd_usuario',
                                'km_ini', 'km_fim','os');
}
