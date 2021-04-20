@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix una nova ONG
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form method="post" action="{{ route('ongs.store') }}">
          <div class="form-group">
              @csrf
              <label for="cif">CIF</label>
              <input type="text" class="form-control" name="cif"/>
          </div>
          <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="adreça">Adreça</label>
              <input type="text" class="form-control" name="adreça"/>
          </div>
          <div class="form-group">
              <label for="poblacio">Població</label>
              <input type="text" class="form-control" name="poblacio"/>
          </div>
          <div class="form-group">
              <label for="comarca">Comarca</label>
              <input type="text" class="form-control" name="comarca"/>
          </div>
          <div class="form-group">
              <label for="tipusOng">Tipus d'ONG</label>
		<input type="text" class="form-control" name="tipusOng"/>
           </div>
          <div class="form-group">
              <label for="utilitatPublica">Ha sigut declarada d'Utilitat pública</label>
              <input type="text" class="form-control" name="utilitatPublica"/>
         </div>
          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('ongs') }}">Accés directe a la Llista d'ONGs</a>
@endsection