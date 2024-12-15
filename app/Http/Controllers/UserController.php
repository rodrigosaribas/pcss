<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        //regras de negócio
        //variaveis e conteúdos -> view
        /*$nome = 'rodrigo';
        return view('teste', ['nome' => $nome]);*/

        return view('users.index', [
            'greeting' => 'Hello World!',
            'users' => $users
        ]);
    }
    public function teste()
    {
        $users = User::all();

        return view('testecontroller', [
            'greeting' => 'Hello World!',
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
