<?php
error_reporting(0);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
    /* Autenticação */
    Route::group(['middleware' => 'web'], function () {
        Route::auth();
        Route::get('/', 'HomeController@index');
    });

        Route::get('/edicao','edicaocontroller@index');
        Route::get('/obtemreserva','agendacontroller@index');
        Route::get('/api/v1/agenda/{id?}','agendacontroller@index');
        Route::post('/api/v1/agenda','agendacontroller@store');
        Route::post('/api/v1/agenda/{id}','agendacontroller@update');
        Route::delete('/api/v1/agenda/{id}','edicaocontroller@destroy');

        Route::post('/novo', function(){
            event(new App\Events\PublishToFanoutEvent(Request::input('title')));
            return;
        });

    $veiculos = array("img_veiculo_0.gif","img_veiculo_1.gif","img_veiculo_2.gif","img_veiculo_3.gif","img_veiculo_4.gif","img_veiculo_5.gif","img_veiculo_6.gif","img_veiculo_7.gif","img_veiculo_8.gif");
    View::share('veiculos', $veiculos);

    $dd=date('d');
    $mm=date('m');
    $aa=date('Y');

    if ($dd > 17){
        $dma = date('Y')."-".date('m')."-".date('d');
        $date = new DateTime($dma);
        $date->modify('+1 day');
        $data_reserva = $date->format('d/m/Y');
        $dia=date('d');
        $mes=date('m')-1;
        $ano=date('Y');
        $hora_agenda = 7;
    }else{
        $dma = date('Y')."-".date('m')."-".date('d');
        $data_reserva = date('d/m/Y');
        $dia=date('d');
        $mes=date('m')-1;
        $ano=date('Y');
        $hora_agenda = date("G");
    }

$horario = date('G:i:s');

View::share('dia', $dia);
View::share('mes', $mes);
View::share('ano', $ano);
View::share('hora_agenda', $hora_agenda);
View::share('d', $dia);

$dd=date('d');
$mm=date('m');
$aa=date('Y');
$hora=date('H');
$data_agora = $aa.$mm.$dd.$hora;

View::share('dd', $dd);
View::share('mm', $mm);
View::share('aa', $aa);
View::share('hora', $hora);
View::share('data_agora', $data_agora);
View::share('veiculo_ini', array());
View::share('veiculo_fim', array());
View::share('v',0);
View::share('rids', array());
View::share('ids',null);
View::share('id',null);
View::share('data_filtro',$data_filtro);
View::share('dma',$dma);
