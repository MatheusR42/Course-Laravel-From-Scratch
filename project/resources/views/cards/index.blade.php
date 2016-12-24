@extends('layout')

@section('content')
    <div class="title m-b-md">
        My cards
    </div>

    @foreach ($cards as $card)
        <li>{{ $card->title }}</li>
    @endforeach
@endsection