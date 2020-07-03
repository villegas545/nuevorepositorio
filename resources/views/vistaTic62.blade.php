<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($datos as $item)
          <tr>
          <th scope="row">{{$item['id']}}</th>
            <td> {{$item['Nombre']}}</td>
            <td>  {{$item['Descripcion']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
