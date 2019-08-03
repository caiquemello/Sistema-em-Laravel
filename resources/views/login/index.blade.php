@extends('layout.site')

@section('titulo','cursos')
@section('conteudo')

<h2 class="text-center">Login</h2>

<div class=" row container">
   <div class = "col-md-12 ">
       @if (session('status'))
    <div class="alert alert-success">
        {‌{ session('status') }}
    </div>
@endif
        <form action="{{route('site.login.entrar')}}" method="post" >
                {{ csrf_field() }}
                
        <div class="form-group">
            <label>Email:</label>
        <input type="text" class="form-control" name="email" placeholder="Email">

        <div class="form-group">
            <label>Senha:</label>
        <input type="password" class="form-control" name="senha" placeholder="Senha">
        
         <br>
            
               <button type="submit" class="btn btn-primary">Entrar</button>
           
            
        </form>
        <br><br>
        <div class="text-center text-danger">
        <p >Email: kaiquemello3@gmail.com</p>
        <p>Senha: 1234</p>
        </div>
   </div>
   @endsection
