@extends('disseny')

@section('content')

<h1>Llista d'usuaris</h1>
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
          <td>Nom d'Usuari</td>
          <td>Contrasenya</td>
          <td>Nom</td>
          <td>Cognoms</td>
	  <td>Correu</td>
	  <td>Mòbil</td>
        </tr>
    </thead>
    <tbody>
        @foreach($usuari as $usu)
        <tr>
            <td>{{$usu->id}}</td>
            <td>{{$usu->nomUsuari}}</td>
            <td>{{$usu->nom}}</td>
            <td>{{$usu->cognoms}}</td>
	    <td>{{$usu->correu}}</td>
	    <td>{{$usu->mobil}}</td>
            <td class="text-left">
                <a href="{{ route('usuaris.edit', $usu->id)}}" class="btn btn-success btn-sm">Edita</a>
                <form action="{{ route('usuaris.destroy', $usu->id)}}" method="post" style="display: inline-block">
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
<br><a href="{{ url('usuaris/create') }}">Accés directe a la vista de creació d'usuaris</a>
@endsection
