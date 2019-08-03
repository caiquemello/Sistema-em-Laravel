@extends('layout.site')

@section('titulo','cursos')
@section('conteudo')
 <h2 class="text-center">Adicionar Cursos</h2>
  <div class="row">
      <table class="table">
          <thead>
              <tr>
                  <th></th>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Valor</th>
                  <th>Imagem</th>
                  <th>Publicado</th>
                  <th>Ação</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($registros as $registro)
              <tr>
                  <td scope="row"></td>
                  <td>{{$registro->id}}</td>
                   <td>{{$registro->nome}}</td>
                  <td>{{$registro->descricao}}</td>
                  <td>{{$registro->valor}}</td>
              <td><img width="90" height="" src="{{asset($registro->imagem)}}" alt ="{{$registro->titulo}}"  />  </td>
              <td>{{$registro->publicado}}</td>
              <td>
              <a class = "btn btn-info" href="{{route('admin.cursos.editar',$registro->id)}}">Editar</a>
              <a class = "btn btn-danger" href="{{route('admin.cursos.deletar',$registro->id)}}">Deletar</a>
              </td>
              </tr>
              @endforeach
          </tbody>
          
      </table>

  </div>
  <div class="row">
              <a class = "btn btn-success" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
          </div>
          <br><br>
    
@endsection
    


