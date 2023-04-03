@extends('layouts.layout')
@section('contenido')


{{--    PARTE L NO--}}
    <br>
    <br>
    <h4>TU PERSONAJE ES...</h4>
    <br>


    <h1>{{$alumna->first_lastname ?? 0}} {{$alumna->second_lastname ?? 0}}</h1>

    <h1>{{$alumna->first_name ?? 0}} {{$alumna->second_name ?? 0}}</h1>

    <div class="d-flex justify-content-center">
        <table class="table table-white table-striped mt-4" id="headertable">
            <tr>
                <td>Fecha de ingreso</td>
                <td>{{$alumna->year_income ?? 0}}</td>
            </tr>

            <tr>
                <td>Período de ingreso</td>
                <td>0{{$alumna->cicle ?? 0}}</td>
            </tr>

        </table>
    </div>

    <br>
    <br>

    <div class="mt-3">
        <a href="{{url('')}}" class="btn btn-secondary btn-block col-md-2 mb-4" tabindex="8">Regresar</a>
    </div>

@endsection
