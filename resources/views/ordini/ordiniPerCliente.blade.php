@extends('layouts.app')


@section('content')



<table>
    <tr>
        <th>
            Cliente
        </th>
        <th>
            Colli Prodotti
        </th>
    </tr>
    @foreach ($numeroColli->cliente as $client)
    $conta += $client->numeroColli
    <tr>
        <td>
            {{$numeroColli->cliente}}
        </td>
        <td>
            {{$conta}}
        </td>
    </tr>
    @endforeach
</table>
@endsection