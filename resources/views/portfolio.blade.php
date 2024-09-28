@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @if($portfolio)
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @endif
    </ul>
@endsection
