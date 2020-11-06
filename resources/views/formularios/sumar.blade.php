@extends('plantilla')
@section('contenido')
<form method="POST" action="/suma">
    @csrf
    <div class="form-group">
        <label for="numero_uno">Número Uno</label>
        <input type="number" class="form-control" name="numero_uno" id="numero_uno" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="numero_dos">Número Dos</label>
        <input type="number" class="form-control" name="numero_dos" id="numero_dos" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-secondary">Sumar</button>
</form>
@endsection