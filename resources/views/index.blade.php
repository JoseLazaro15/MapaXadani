@extends('layouts.master')

@section('content')
    <h1>Registros de la Base de Datos</h1>

    <form method="GET" action="{{ route('obtenerInformacion') }}">
    @csrf
    <label for="id">Ingresa un ID:</label>
    <input type="text" name="id" id="id">
    <button type="submit">Obtener Información</button>
</form>


    <h1>Información Recuperada</h1>
    @if ($informacion)
        <p>ID: {{ $informacion->id }}</p>
        <p>Status del Lote: {{ $informacion->status_lote }}</p>
        <p>Numero de Manzana: {{ $informacion->num_manzana }}</p>
        <p>Numero de lote: {{ $informacion->num_lote }}</p>
        <p>Zona: {{ $informacion->zona }}</p>
        <p>Area del lote: {{ $informacion->area_lote }}</p>
        <p>Precio de contado: {{ $informacion->precio_con }}</p>
        <!-- Muestra otros campos según tu modelo aquí -->
    @else
        <p>No se encontró información para el ID proporcionado.</p>
    @endif
@endsection

