@extends("plantilla")

@section('seccion')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nombre</th>
        <th scope="col">Descripci[on</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($notas as $item)
        <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['nombre']}}</td>
            <td>{{$item['Descripcion']}}</td>
            <td>@mdo</td>
          </tr>
        @endforeach
              </tbody>
  </table>
@endsection
