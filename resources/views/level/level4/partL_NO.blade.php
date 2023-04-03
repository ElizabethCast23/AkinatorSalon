@extends('layouts.layout')
@section('contenido')


    PARTE L NO
    <br>

    {{--    <div>{{$alumna ?? 0}}</div>--}}
    <div>{{$alumna->first_lastname ?? 0}}</div>
    <div>{{$alumna->second_lastname ?? 0}}</div>
    <div>{{$alumna->first_name ?? 0}}</div>
    <div>{{$alumna->second_name ?? 0}}</div>

    <br>
    <br>
    <br>
    <br>


    <div class="mt-3">
        <a href="{{url('')}}" class="btn col-md-2 mb-4">Regresar</a>
    </div>


@endsection
