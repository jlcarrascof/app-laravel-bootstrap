@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse ($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }} <small>{{ $loop->first ? 'its the first one' : '' }}</small></li>
        @empty
            <li>No portfolio items found</li>
        @endforelse
    </ul>
@endsection
