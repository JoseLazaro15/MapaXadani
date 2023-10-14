<!DOCTYPE html>
<html>
<head>
    <title>Correo de contacto</title>
</head>
<body>
    <p><strong>Un Potencial cliente ha solicitado informacion</p>
    <h1>Datos del cliente</h1>
    <p><strong>Un usuario ha enviado un mensaje a través del formulario de contacto de tu sitio web.</p>
    <p><strong>Nombre:</strong> {{ $nombre }}</p>
    <p><strong>Teléfono de contacto:</strong> {{ $telefono }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $correo }}</p>
   
    <h2>Información del Lote de interes</h2>
    <p><strong>Status del Lote:</strong> {{ $informacionLote->status_lote }}</p>
    <p><strong>Numero de Manzana:</strong> {{ $informacionLote->num_manzana }}</p>
    <p><strong>Numero de lote:</strong> {{ $informacionLote->num_lote }}</p>
    <p><strong>Zona:</strong> {{ $informacionLote->zona }}</p>
    <p><strong>Area del lote:</strong> {{ $informacionLote->area_lote }}</p>
    <p><strong>Precio de contado:</strong> {{ $informacionLote->precio_con }}</p>

    <p><strong>Recuerda brindarle una excelente atencion a nuestro cliente. Gracias.</p>
    <!-- Puedes agregar más contenido HTML aquí según tus necesidades -->


</body>
</html>
