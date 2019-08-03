

        <div class="form-group">
            <label >Nome:</label>
        <input type="text" class="form-control" value="{{isset($registro->nome)? $registro->nome : ''}}" name="nome" placeholder="Nome">
        </div>
         <div class="form-group">
            <label >Descricão:</label>
        <input type="text" class="form-control" value="{{isset($registro->descricao)? $registro->descricao : ''}}" name="descricao" placeholder="descricao">
        </div>

         <div class="form-group ">
            <label >Imagem</label>
            <input type="file" class="form-control-file"  name="imagem">
        </div>
        
            @if (isset($registro->imagem))
        <div class="input-field">
           
               <img width="150" src="{{asset($registro->imagem)}}" >
        </div>
          @endif

        <div class="form-group">
            <label >Valor:</label>
        <input type="number" class="form-control" value="{{isset($registro->valor)? $registro->valor : ''}}" name="valor" placeholder="valor">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" {{isset($registro->publicado)&& $registro->publicado == 'sim' ? 'checked' : ''}} value="sim" name="publicado">
            <label class="form-check-label" >
                Publicado?
            </label>
            </div>
          <br>
  
    

    