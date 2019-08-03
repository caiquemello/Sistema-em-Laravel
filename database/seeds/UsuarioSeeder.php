<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=>"caique",
            'email'=>"kaiquemello3@gmail.com",
            'password'=>bcrypt("1234"),
        ];

        if (User::where('email','=',$dados['email'])->count()) {
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "usuario alterado";
        }else {
            User::create($dados);
            echo "usuario criado";
        }
    }
}
