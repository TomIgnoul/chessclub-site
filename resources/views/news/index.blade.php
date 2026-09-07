@extends('layouts.app')

@section('title', 'News')

@section('content')
    <h1>News</h1>

    @foreach($news as $item)
        <articl>
            <h2>{{ $item->title }}</h2>
            <p>{{ $item->content }}</p>
        </articl>
    @endforeach
@endsection
