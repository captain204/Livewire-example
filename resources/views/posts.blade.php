@extends('layouts.app')
@section('content')
    <p>

        {{$post->body}}

    </p>(

    @livewire('delete-post')
@endsection