@extends('layouts.app')

@section('title', 'Faqs')

@section('content')
    <h1>Faqs</h1>

    @foreach(Faqs as $item)
        <article>
            <h2>{{ $item->question }}</h2>
            <p>{{ $item->answer }}</p>
        </article>
    @endforeach
@endsection
