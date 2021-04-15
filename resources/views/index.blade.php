@extends('disseny')

@section('content')

<h1>Llista d'ONGs</h1>
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
	  <td>CIF</td>
          <td>Nom</td>
          <td>Adreça</td>
          <td>Població</td>
          <td>Comarca</td>
          <td>Tipus ONG</td>
          <td>Utilitat Pública</td>
        </tr>
    </thead>
    <tbody>
        @foreach($ong as $assoc)
        <tr>
	    <td>{{$assoc->id}}</td>
            <td>{{$assoc->cif}}</td>
            <td>{{$assoc->nom}}</td>
            <td>{{$assoc->adreça}}</td>
            <td>{{$assoc->poblacio}}</td>
            <td>{{$assoc->comarca}}</td>
            <td>{{$assoc->tipusOng}}</td>
            <td>{{$assoc->utilitatPublica}}</td>
            <td class="text-left">
                <a href="{{ route('ongs.edit', $assoc->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('ongs.destroy', $empl->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('ongs/create') }}">Accés directe a la vista de creació d'ongs</a>
@endsection

