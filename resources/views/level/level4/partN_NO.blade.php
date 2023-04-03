@extends('layouts.layout')
@section('contenido')


    PARTE N NO
    <br>

    {{--    <div>{{$alumna ?? 0}}</div>--}}
    <div>{{$alumna->first_lastname ?? 0}}</div>
    <div>{{$alumna->second_lastname ?? 0}}</div>
    <div>{{$alumna->first_name ?? 0}}</div>
    <div>{{$alumna->second_name ?? 0}}</div>

    <br>
    <br>

@endsection
