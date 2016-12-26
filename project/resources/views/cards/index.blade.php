@extends('layout')

@section('content')
    <div class="title m-b-md">
        My cards
    </div>

    @foreach ($cards as $card)
        <li><a href="/cards/{{$card->id}}">{{ $card->title }}</a></li>
    @endforeach
@endsection