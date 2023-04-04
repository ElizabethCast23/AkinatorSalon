@extends('layouts.layout')
@section('contenido')


{{--    PARTE K NO--}}
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
        <a href="{{url('')}}" class="btn btn-secondary btn-block col-md-2 mb-4" tabindex="8">Regresar</a>
    </div>


@endsection
