@extends('disseny')

@section('content')

<h1>Aplicació d'administració de socis</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou soci
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
      <form method="post" action="{{ route('socis.store') }}">
          <div class="form-group">
              @csrf
              <label for="nif">NIF</label>
              <input type="text" class="form-control" name="nif"/>
          </div>
        <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom"/>
            </div>
        <div class="form-group">
                <label for="nom">Cognoms</label>
                <input type="text" class="form-control" name="cognoms"/>
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
                <label for="telefonFixe">Telèfon Fixe</label>
                <input type="text" class="form-control" name="telefonFixe"/>
            </div>
            <div class="form-group">
                <label for="telefonMobil">Telèfon Mobil</label>
                <input type="text" class="form-control" name="telefonMobil"/>
            </div>
        <div class="form-group">
                <label for="email">Correu electrónic</label>
                <input type="text" class="form-control" name="email"/>
            </div>
        <div class="form-group">
                <label for="dataAlta">Data d'alta</label>
                <input type="text" class="form-control" name="dataAlta"/>
            </div>
        <div class="form-group">
                <label for="quotaMensual">Quota mensual</label>
                <input type="text" class="form-control" name="quotaMensual"/>
            </div>
        <div class="form-group">
                <label for="aportacióAnual">Aportació anual</label>
                <input type="text" class="form-control" name="aportacioAnual"/>
            </div>


          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('socis') }}">Accés directe a la Llista de socis</a>
@endsection

