@extends('layout.site')

@section('titulo','cursos')
@section('conteudo')

<h2 class="text-center">Editar Cursos</h2>

<div class=" row container">
   <div class = "col-md-12 ">
        <form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
            @include('admin.cursos.form')
               <button type="submit" class="btn btn-primary">Salvar</button>
            <br>
            
        </form>
   </div>

    
@endsection