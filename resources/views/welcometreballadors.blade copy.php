@extends('disseny')

@section('content')

<h1>Aplicació d'administració de treballadors</h1>
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou treballadors
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
      <form method="post" action="{{ route('treballadors.store') }}">
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
                <label for="dataIngres">Data d'ingrés</label>
                <input type="text" class="form-control" name="dataIngres"/>
            </div>
        <div class="form-group">
                <label for="professionalVoluntari">Professional o voluntari</label>
                <input type="text" class="form-control" name="professionalVoluntari"/>
            </div>
        <div class="form-group">
                <label for="sou">Sou</label>
                <input type="text" class="form-control" name="sou"/>
            </div>
        <div class="form-group">
                <label for="carrec">Càrrec</label>
                <input type="text" class="form-control" name="carrec"/>
            </div>
        <div class="form-group">
                <label for="seguretatSocial">Quantitat que es paga a la seguretat social</label>
                <input type="text" class="form-control" name="seguretatSocial"/>
            </div>
        <div class="form-group">
                <label for="irpf">%IRPF</label>
                <input type="text" class="form-control" name="irpf"/>
            </div>
        <div class="form-group">
                <label for="edat">Edat</label>
                <input type="text" class="form-control" name="edat"/>
            </div>
        <div class="form-group">
                <label for="professio">Professió</label>
                <input type="text" class="form-control" name="professio"/>
            </div>
        <div class="form-group">
                <label for="hores">Hores que es dediquen a l'associació</label>
                <input type="text" class="form-control" name="hores"/>
            </div>


          <button type="submit" class="btn btn-block btn-primary">Envia</button>
      </form>
  </div>
</div>
<br><a href="{{ url('treballadors') }}">Accés directe a la Llista de treballadors</a>
@endsection

