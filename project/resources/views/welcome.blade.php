@extends('layout')

@section('content')
    @unless (empty($people))
        
        @foreach ($people as $pearson)
            <li>{{ $pearson }}</li>
        @endforeach
    @else
         There are no people
    @endunless
@stop