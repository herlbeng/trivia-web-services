@extends('layout')

@section('content')
    @if ($players->isNotEmpty())
        <table class="table">
            <thead class="thead bg-secondary text-white">
            <tr>
                <th width="5%" scope="col">#</th>
                <th width="25%" scope="col">Nombre</th>
                <th width="20%" scope="col">Respuestas</th>
                <th width="20%" scope="col">Puntos</th>
                <th width="30%" scope="col" class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($players as $player)
                <tr>
                    <th scope="row">{{ $player->id }}</th>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->answers }}</td>
                    <td>{{ $player->points }}</td>
                    <td>
                    <td class="pull-right">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No hay Jugadores registrados.</p>
    @endif

@endsection
