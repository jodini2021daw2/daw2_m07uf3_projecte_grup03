@extends('disseny')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou usuari
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
      <form method="post" action="{{ route('usuaris.store') }}">
          <div class="form-group">
              @csrf
              <label for="nomUsuari">Nom D'usuari</label>
              <input type="text" class="form-control" name="nomUsuari"/>
          </div>
          <div class="form-group">
              <label for="contrasenya">Contrasenya</label>
              <input type="text" class="form-control" name="contrasenya"/>
          </div>
          <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>          
          <div class="form-group">
              <label for="cognoms">Cognoms</label>
              <input type="text" class="form-control" name="cognoms"/>
          </div>
          <div class="form-group">
              <label for="correu">Correu Electrònic</label>
              <input type="text" class="form-control" name="correu"/>
          </div>
          <div class="form-group">
              <label for="mobil">Mòbil</label>
              <input type="text" class="form-control" name="mobil"/>
          </div>

          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a>
@endsection