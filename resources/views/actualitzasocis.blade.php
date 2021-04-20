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
        <form method="post" action="{{ route('socis.update', $soci->id) }}">
            <div class="form-group">
                   @csrf
                @method('PATCH')
                <label for="nif">NIF</label>
                <input type="text" class="form-control" name="nif" value="{{ $soci->nif }}" />
            </div>
        <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $soci->nom }}" />
            </div>
        <div class="form-group">
                <label for="nom">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $soci->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça" value="{{ $soci->adreça }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Població</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $soci->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $soci->comarca }}" />
            </div>
            <div class="form-group">
                <label for="telefonFixe">Telèfon Fixe</label>
                <input type="text" class="form-control" name="telefonFixe" value="{{ $soci->telefonFixe }}" $
            </div>
            <div class="form-group">
                <label for="telefonMobil">Telèfon Mobil</label>
                <input type="text" class="form-control" name="telefonMobil" value="{{ $soci->telefonMobil }}" />
            </div>
        <div class="form-group">
                <label for="email">Correu electrónic</label>
                <input type="text" class="form-control" name="email" value="{{ $soci->email }}" />
            </div>
        <div class="form-group">
                <label for="dataAlta">Data d'alta</label>
                <input type="text" class="form-control" name="dataAlta" value="{{ $soci->dataAlta }}" />
            </div>
        <div class="form-group">
                <label for="quotaMensual">Quota mensual</label>
                <input type="text" class="form-control" name="quotaMensual" value="{{ $soci->quotaMensual }}" />
            </div>
        <div class="form-group">
                <label for="aportacióAnual">Aportació anual</label>
                <input type="text" class="form-control" name="aportacioAnual" value="{{ $soci->aportacioAnual }}" />
            </div>



            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('socis') }}">Accés directe a la Llista de socis</a
@endsection

