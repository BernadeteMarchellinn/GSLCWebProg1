@extends('layouts.main')

@section('content')
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">nama</th>
      <th scope="col">no.hp</th>
    </tr>
  </thead>

    @foreach ($judul as $contacts)

  <tbody>
    <tr>

      <td>{{ $contacts ["nama"]}}</td>
      <td>{{ $contacts ["no.hp"]}}</td>
    </tr>
  </tbody>

    @endforeach
    </table>
@endsection