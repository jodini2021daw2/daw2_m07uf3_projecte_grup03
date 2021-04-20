
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
        <form method="post" action="{{ route('treballadors.update', $treballador->id) }}">
            <div class="form-group">
                   @csrf
                @method('PATCH')
                <label for="nif">NIF</label>
                <input type="text" class="form-control" name="nif" value="{{ $treballador->nif }}" />
            </div>
        <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $treballador->nom }}" />
            </div>
        <div class="form-group">
                <label for="nom">Cognoms</label>
                <input type="text" class="form-control" name="cognoms" value="{{ $treballador->cognoms }}" />
            </div>
            <div class="form-group">
                <label for="adreça">Adreça</label>
                <input type="text" class="form-control" name="adreça" value="{{ $treballador->adreça }}" />
            </div>
            <div class="form-group">
                <label for="poblacio">Població</label>
                <input type="text" class="form-control" name="poblacio" value="{{ $treballador->poblacio }}" />
            </div>
            <div class="form-group">
                <label for="comarca">Comarca</label>
                <input type="text" class="form-control" name="comarca" value="{{ $treballador->comarca }}" />
            </div>
            <div class="form-group">
                <label for="telefonFixe">Telèfon Fixe</label>
                <input type="text" class="form-control" name="telefonFixe" value="{{ $treballador->telefonFixe }}" />
            </div>
            <div class="form-group">
                <label for="telefonMobil">Telèfon Mobil</label>
                <input type="text" class="form-control" name="telefonMobil" value="{{ $treballador->telefonMobil }}" />
            </div>
        <div class="form-group">
                <label for="email">Correu electrónic</label>
                <input type="text" class="form-control" name="email" value="{{ $treballador->email }}" />
            </div>
        <div class="form-group">
                <label for="dataIngres">Data d'ingrés</label>
                <input type="text" class="form-control" name="dataIngres" value="{{ $treballador->dataIngres }}" />
            </div>
        <div class="form-group">
                <label for="professionalVoluntari">Professional o voluntari</label>
                <input type="text" class="form-control" name="professionalVoluntari" value="{{ $treballador->treballadorVoluntari }}" />
            </div>
        <div class="form-group">
               <label for="sou">Sou</label>
                <input type="text" class="form-control" name="sou" value="{{ $treballador->sou }}" />
            </div>
        <div class="form-group">
               <label for="carrec">Carrec</label>
                <input type="text" class="form-control" name="carrec" value="{{ $treballador->carrec }}" />
            </div>
        <div class="form-group">
               <label for="seguretatSocial">Quantitat que es paga a la seguretat Social</label>
                <input type="text" class="form-control" name="seguretatSocial" value="{{ $treballador->seguretatSocial }}" />
            </div>
        <div class="form-group">
               <label for="irpf">%IRPF</label>
                <input type="text" class="form-control" name="irpf" value="{{ $treballador->irpf }}" />
            </div>
        <div class="form-group">
               <label for="edat">Edat</label>
                <input type="text" class="form-control" name="edat" value="{{ $treballador->edat }}" />
            </div>
        <div class="form-group">
               <label for="professio">Professio</label>
                <input type="text" class="form-control" name="professio" value="{{ $treballador->professio }}" />
            </div>
        <div class="form-group">
               <label for="hores">Quantitat d'hores dedicades a l'associació</label>
                <input type="text" class="form-control" name="hores" value="{{ $treballador->hores }}" />
            </div>
            <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
        </form>
    </div>
</div>
<br><a href="{{ url('treballadors') }}">Accés directe a la Llista de Treballadors</a
@endsection

