<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Mockery\ExpectsHigherOrderMessage;

class MainController extends Controller
{
    public function listar()
    {
        $usuarios = Usuario::withTrashed()->get();
        
        echo $usuarios;
        
        // $usuario->updateOrFail(
        //     [
        //         'nome' => 'weeder',
        //         'email' => 'weederboss0@gmail.com',
        //         'senha' => bcrypt('weed'),
        //         'cpf' => '12345678910',
        //         'nascimento' => '1998-03-15',
        //         'telefone' =>'12345678910',
        //         'foto' => 'weeder.jpg',
        //         'tipo' => 'twink',
        //         'status' => 'sleeping',
        //         'email_verificado' => 'sim',
        //         'email_codigo' => '123456',
        //     ]);
    }
}
