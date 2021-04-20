@extends('disseny')

@section('content')


<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('usuaris.update', $usuari->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="nomUsuari">Nom d'Usuari</label>
                <input type="text" class="form-control" name="nomUsuari" value="{{ $usuari->nomUsuari }}" />
            </div>
            <div class="form-group">
                <label for="contrasenya">Contrasenya</label>
                <input type="text" class="form-control" name="contrasenya" value="{{ $usuari->contrasenya }}" />
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $usuari->nom }}" />
            </div>
            <div class="form-group">
                <label for="cognoms">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $usuari->cognoms }}" />
            </div> 
            <div class="form-group">
                <label for="correu">Correu</label>
                <input type="text" class="form-control" name="correu" value="{{ $usuari->correu }}" />
            </div> 
            <div class="form-group">
                <label for="mobil">Mòbil</label>
                <input type="text" class="form-control" name="mobil" value="{{ $usuari->correu }}" />
            </div> 
	<button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
	<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a
@endsection
