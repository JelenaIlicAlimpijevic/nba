@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $team->name }}</h2>
    <p class="blog-post-meta">{{ $team->email }}</p>
    <p class="blog-post-meta">{{ $team->city }}</p>
    <p class="blog-post-meta">{{ $team->address }}</p>
    
    <ul>
    @foreach ($team->player as $player )

        <li><a href="/players/{{ $player->id }}">{{$player->first_name}}{{$player->last_name}}</a></li>

    @endforeach
    </ul>


@endsection
