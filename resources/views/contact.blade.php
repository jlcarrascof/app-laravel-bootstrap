@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Name... " value="Javier"><br>
        <input type="email" name="email" placeholder="Email... " value="javier@javier.com"><br>
        <input name="subject" placeholder="Subject... " value="Testing subject"><br>
        <textarea name="content" placeholder="Message... ">Testing Message</textarea><br>
        <button >Send</button>
    </form>
@endsection
