<div class="card">
  <div class="card-header">
    Novo Recurso
  </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm form-group">  
                    Nome
                    <br>
                    <input type="text" name="nome" value="{{  old('nome', $recurso->nome) }}" >
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success"> Enviar </button>   
    </div>
</div>