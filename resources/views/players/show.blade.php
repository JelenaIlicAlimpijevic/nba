@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $player->first_name }}</h2>
    <p class="blog-post-meta">{{ $player->last_name }}</p>
    <a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a>
    
    
    


@endsection