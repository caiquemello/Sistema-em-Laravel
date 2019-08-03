<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $registros = Curso::all();
        return view('admin.cursos.index',compact('registros'));
    }

       public function adicionar()
    {
       
        return view('admin.cursos.adicionar');
    }
     public function salvar(Request $req)
    {
        $dado = $req->all();

            if($dado['nome'] == ''  )
            {
                return redirect()->route('admin.cursos');

            }else {
            

            if (isset($dado['publicado'])) {
                $dado['publicado'] = 'sim';
            }else {
                $dado['publicado'] = 'nao';
            }

            if($req->hasFile('imagem')){
                $imagem = $req->file('imagem');
                $num = rand(1111,9999);
                $dir = "img/cursos/";
                $ex = $imagem->guessClientExtension();
                $nomeImagem = "imagem_".$num.".".$ex;
                $imagem->move($dir,$nomeImagem);
                $dado['imagem'] = $dir."/".$nomeImagem;
            }
            Curso::create($dado);

            return redirect()->route('admin.cursos'); 
        } 
    }

        public function editar($id)
    {
        $registro = Curso::find($id);
        return view('admin.cursos.editar',compact('registro'));
    }

         public function atualizar(Request $req,$id)
    {
        $dado = $req->all();

        if (isset($dado['publicado'])) {
            $dado['publicado'] = 'sim';
        }else {
            $dado['publicado'] = 'nao';
        }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dado['imagem'] = $dir."/".$nomeImagem;
        }
         Curso::find($id)->update($dado);

         return redirect()->route('admin.cursos');  
    }

    public function deletar($id){

         Curso::find($id)->delete();
         
         return redirect()->route('admin.cursos');
    }
}
