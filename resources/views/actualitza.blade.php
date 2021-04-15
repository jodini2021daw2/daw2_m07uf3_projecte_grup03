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
        <form method="post" action="{{ route('ongs.update', $ong->id) }}">
            <div class="form-group">
                   @csrf
                @method('PATCH')
                <label for="cif">CIF</label>
                <input type="text" class="form-control" name="cif" value="{{ $ong->cif }}" />
            </div>
        <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $ong->nom }}" />
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça" value="{{ $ong->adreça }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Població</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $ong->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $ong->comarca }}" />
            </div>
            <div class="form-group">
                <label for="tipusOng">Tipus ONG</label>
                <input type="text" class="form-control" name="tipusOng" value="{{ $ong->tipusOng }}" $
            </div>
            <div class="form-group">
                <label for="utilitatPublica">Ha estat declarada d'utilitat pública?</label>
                <input type="text" class="form-control" name="utilitatPublica" value="{{ $ong->utilitatPublica }}" />
            </div>


            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('ongs') }}">Accés directe a la Llista d'ONGs</a
@endsection
