@extends('layouts.plantillaBase')

@section('contenido')
    <h1 class="text-center">Crear Registro</h1>

    <form action="/articulos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label" >Código</label>
            <input id="codigo" type="text" name="codigo" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label" >Descripción</label>
            <input id="descripcion" type="text" name="descripcion" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label" >cantidad</label>
            <input id="cantidad" type="number" name="cantidad" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label" >Precio</label>
            <input id="precio" type="number" name="precio" step="any" value="0.00" class="form-control" >
        </div>
        <a href="/articulos" class="btn btn-secundary btn-danger"  tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary"  tabindex="4">Guardar</button>
    </form>


@endsection