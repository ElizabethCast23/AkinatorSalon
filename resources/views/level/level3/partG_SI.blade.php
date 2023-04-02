@extends('layouts.layout')
@section('contenido')


    PARTE G SI

    <h4>¿ESTE ES TU PERSONAJE?</h4>
    <br>
{{--    <div>{{$quest->question ?? 0}}</div>--}}
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


{{--    <div class="mt-3">--}}
{{--        <button href="{{url('')}}" class="btn btn-secondary btn-block col-md-2 mb-4" tabindex="8">Regresar</button>--}}
{{--    </div>--}}
{{--    --}}
@endsection
