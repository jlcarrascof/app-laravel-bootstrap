@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Name... "><br>
        <input type="email" name="email" placeholder="Email... "><br>
        <input name="subject" placeholder="Subject... "><br>
        <textarea name="content" placeholder="Message... "></textarea><br>
        <button >Send</button>
    </form>
@endsection
