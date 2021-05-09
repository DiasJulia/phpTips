<?php


namespace Source\Controllers;

use Source\Models\User;

class UserController
{
    public function allUsers()
    {
        $user = (new User())->find()->fetch(true);
        return $user;
    }

    public function registerUser($data)
    {
        $user = (new User());
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        if ($user->save()) {
            echo "Usuário cadastrado com sucesso";
        } else {
            echo "Ocorreu um problema, o usuário não foi cadastrado";
        }

        echo "aaaa";
    }

}