@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form>
        <input name="name" placeholder="Name... ">
        <input type="email" name="email" placeholder="Email... ">
        <input name="subject" placeholder="Subject... ">
        <textarea name="content" placeholder="Message... "></textarea>

        <button >Send</button>
    </form>
@endsection
