@extends('layout')

@section('content')
    
    <div class="card">      
        <h4 class="card-header">
            Registro de Jugadores
        </h4>
        <div class="card-body">
            
            <form method="POST" action="{{ url('api/players')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" >
                    </div>
                    <div class="col-sm-4">
                        <label for="answers">Respuestas:</label>
                        <input type="text" class="form-control" name="answers" id="answers" value="{{ old('answers') }}" >
                    </div>
                    <div class="col-sm-4">
                        <label for="points">Puntos:</label>
                        <input type="text" class="form-control" name="points" id="points" value="{{ old('points') }}" >
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ asset('api/players/') }}" class="btn btn-link">Regresar</a>
            </form>
        </div>
    </div>

@endsection
