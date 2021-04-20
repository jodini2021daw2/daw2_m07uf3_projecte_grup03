@extends('disseny')

@section('content')

<h1>Llista de treballadors</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>NIF</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Adreça</td>
          <td>Població</td>
          <td>Comarca</td>
          <td>Telèfon Fixe</td>
          <td>Telèfon Mòbil</td>
          <td>Correu electrònic</td>
          <td>Data d'ingrés</td>
          <td>Professional o voluntari</td>
          <td>Sou</td>
	  <td>Càrrec</td>
	  <td>Quantitat que es paga a la seguretat social</td>
	  <td>%IRPF</td>
	  <td>Edat</td>
	  <td>Professió</td>
	  <td>Hores dedicades a l'associcació</td>
        </tr>
    </thead>
    <tbody>
        @foreach($treballador as $tre)
        <tr>
            <td>{{$tre->id}}</td>
            <td>{{$tre->nif}}</td>
            <td>{{$tre->nom}}</td>
            <td>{{$tre->cognoms}}</td>
            <td>{{$tre->adreça}}</td>
            <td>{{$tre->poblacio}}</td>
            <td>{{$tre->comarca}}</td>
            <td>{{$tre->telefonFixe}}</td>
            <td>{{$tre->telefonMobil}}</td>
            <td>{{$tre->email}}</td>
            <td>{{$tre->dataIngres}}</td>
            <td>{{$tre->professionalVoluntari}}</td>
            <td>{{$tre->sou}}</td>
            <td>{{$tre->carrec}}</td>
            <td>{{$tre->seguretatSocial}}</td>
            <td>{{$tre->irpf}}</td>
            <td>{{$tre->edat}}</td>
            <td>{{$tre->professio}}</td>
            <td>{{$tre->hores}}</td>

            <td class="text-left">
                <a href="{{ route('treballadors.edit', $tre->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('treballadors.destroy', $tre->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<br><a href="{{ url('treballadors/create') }}">Accés directe a la vista de creació de treballadors</a>
@endsection

