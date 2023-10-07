@extends('layouts.master')

@section('content')
    <h1>Registros de la Base de Datos</h1>

    <form method="GET" action="{{ route('obtenerInformacion') }}">
    @csrf
    <label for="id">Ingresa un ID:</label>
    <input type="text" name="id" id="id">
    <button type="submit">Obtener Información</button>
</form>

<li>
    <a href="#" type="button" class="categoryButton" data-id="30">
        <strong>CATEGORY</strong>
        <span> MENU ELEMENTS</span>
    </a>
</li>




<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- ... encabezado del modal ... -->
            </div>
            <div class="modal-body">
                <div id="modalContent"> <!-- Asegúrate de que este elemento esté presente -->
                    <!-- Aquí se llenará la información dinámicamente -->
                </div>
            </div>
            <div class="modal-footer">
                <!-- ... pie de página del modal ... -->
            </div>
        </div>
    </div>
</div>



    <!--
    <h1>Información Recuperada</h1>
    @if ($informacion)
        <p>ID: {{ $informacion->id }}</p>
        <p>Status del Lote: {{ $informacion->status_lote }}</p>
        <p>Numero de Manzana: {{ $informacion->num_manzana }}</p>
        <p>Numero de lote: {{ $informacion->num_lote }}</p>
        <p>Zona: {{ $informacion->zona }}</p>
        <p>Area del lote: {{ $informacion->area_lote }}</p>
        <p>Precio de contado: {{ $informacion->precio_con }}</p>
    @else
        <p>No se encontró información para el ID proporcionado.</p>
    @endif-->

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryButtons = document.querySelectorAll('.categoryButton');

        categoryButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const id = button.getAttribute('data-id');
                // Realiza una solicitud AJAX para obtener la información por ID
                fetch('/obtenerValoresPorID', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ id: id })
                })
                .then(response => response.json())
                .then(data => {
                    // Rellena el modal con la información recibida
                    document.getElementById('modalContent').innerHTML = `
                        <p>ID: ${data.id}</p>
                        <p>Status del Lote: ${data.status_lote}</p>
                        <p>Numero de Manzana: ${data.num_manzana}</p>
                        <p>Numero de lote: ${data.num_lote}</p>
                        <p>Zona: ${data.zona}</p>
                        <p>Area del lote: ${data.area_lote}</p>
                        <p>Precio de contado: ${data.precio_con}</p>
                        <!-- Muestra otros campos según tu modelo aquí -->
                    `;

                    // Abre el modal
                    $('#myModal').modal('show');
                });
            });
        });
    });
</script>

