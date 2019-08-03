@extends('layout.site')

@section('titulo','cursos')
@section('conteudo')

<div class="container-fluid ">
    <h2 class="text-center">Lista de Cursos</h2>
    <br>
        <div class="row">
            
        @foreach ($cursos as $curso)
            <div class="col-md-3">
                <div class="card" style="width: 14rem;"  style="height: 12rem;">
                    <img class="card-img-top p-1" src="{{$curso->imagem}}" alt="Card image cap">
                    <div class="card-body">
                     <hr>
                    <h5 class="card-title text-center">{{$curso->nome}}</h5>
                    <p class="card-text text-center">{{$curso->descricao}}</p>
                      <Small><p class="card-text text-center">Valor:$ {{$curso->valor}}</p></Small>
                      <hr>
                        <a href="#" class="btn btn-primary">ler mais</a>
                </div>
                </div>
            </div>

        @endforeach
        
    </div>

  {{ $cursos->links() }}
   
</div>
    
@endsection

