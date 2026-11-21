<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/admin.css'])
</head>
<body>
    <div class="ContainerTitulo">
        <h1>Hola bienvenido admin</h1>
    </div>
    <div class="GatoAcomodar">
        <img src="{{ asset('img/GatoLloron.jpg')}}" alt="Logo" style="width:800px; height:500px;">
    </div>
</body>
</html>