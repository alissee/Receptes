@extends('themain')
@section('content')
      <div class="row">
          <h1>Pievienot recepti</h1>
          <hr>
          <form>
              <div class="form-group">
                  <label name='ReceptesNosaukums'>Receptes nosaukums: </label>
                  <input id='ReceptesNosaukums' name="ReceptesNosaukums" class="form-control">
              </div>
              <div class="form-group">
                  <label name='Recepte'>Recepte: </label>
                  <textarea id='Recepte' name="Recepte" class="form-control">Rakstiet savu recepti šeit...</textarea>
              </div>
              <input type="submit" value="Pievienot" class="btn btn-success"> 
          </form>
      </div>
@endsection