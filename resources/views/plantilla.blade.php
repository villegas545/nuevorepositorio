<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<a href="{{ route('noticias') }}" class="btn btn-primary">Nosotros</a>
    @yield('seccion')
    <button class="btn btn-primary">hola</button>
</body>
</html>
