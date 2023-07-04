<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Correo electrónico</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            color: #000000;
        }

        h1 {
            color: #FF0000;
        }

        p {
            margin-bottom: 10px;
        }

        .button {
            display: inline-block;
            background-color: #007BFF;
            color: #FFFFFF;
            padding: 10px 20px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Envío de mail clase 2205 - grupo 6</h1>
    <p>Datos recibidos.</p>
    <p>Nombre: {{$details['nombre']}} </p>
    <p>Correo: {{$details['correo']}} </p>
    <p>Teléfono: {{$details['telefono']}}</p>
    <p>Mensaje: {{$details['mensaje']}}</p>
</body>
</html>
