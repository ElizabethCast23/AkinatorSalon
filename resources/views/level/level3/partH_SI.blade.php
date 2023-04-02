@extends('layouts.layout')
@section('contenido')


    PARTE H SI

    <h4>¿ESTE ES TU PERSONAJE?</h4>
    <br>
{{--    <div>{{$quest->question ?? 0}}</div>--}}
    {{--    <div>{{$alumna ?? 0}}</div>--}}
    <div>{{$alumna->first_lastname ?? 0}}</div>
    <div>{{$alumna->second_lastname ?? 0}}</div>
    <div>{{$alumna->first_name ?? 0}}</div>
    <div>{{$alumna->second_name ?? 0}}</div>


@endsection
