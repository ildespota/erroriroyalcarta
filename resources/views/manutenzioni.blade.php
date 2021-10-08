@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 ">
        <table class="table">
            <thead>
                <tr scope="row">
                    <th class="text-danger" scope="col">
                        NR.
                    </th>
                    <th class="text-danger" scope="col">
                        Data intervento
                    </th>
                    <th class="text-danger" scope="col">
                        Esecutore
                    </th>
                    <th class="text-danger" scope="col">
                        Descrizione Manutenzione
                    </th>
                    <th class="text-danger" scope="col">
                        Tipo Macchina
                    </th>
                    <th class="text-danger" scope="col">
                        Note
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($manutenzioni as $manutenzione)
                <tr>
                    <th scope="row">{{$manutenzione->idManutenzione}}</th>
                    <td>{{$manutenzione->data}}</td>
                    <td>{{$manutenzione->esecutore}}</td>
                    <td>{{$manutenzione->descrizioneManutenzione}}</td>
                    <td>{{$manutenzione->note}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{route('createmanutenzioni')}}"><button> Crea manutenzioni</button></a>
    </div>
</div>

@endsection