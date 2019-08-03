@extends('layout.site')

@section('titulo','cursos')
@section('conteudo')

<h2 class="text-center">Atulizar Cursos</h2>

<div class=" row container">
   <div class = "col-md-12 ">
        <form action="{{route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
               <input type="hidden" name="_method" value="put">
            @include('admin.cursos.form')
               <button type="submit" class="btn btn-primary">atualizar</button>
            <br>
            
        </form>
   </div>

    
@endsection