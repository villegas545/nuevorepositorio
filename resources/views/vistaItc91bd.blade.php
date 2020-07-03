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
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>

          </tr>
        </thead>
        <tbody>
      @foreach ($datos as $elemento)
          <tr>
            <th scope="row"> {{$elemento['id']}}</th>
            <td>{{$elemento['Nombre']}}</td>
            <td> {{$elemento['Descripcion']}}</td>

          </tr>
    @endforeach
        </tbody>
      </table>





</body>
</html>
