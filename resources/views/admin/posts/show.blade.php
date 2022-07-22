@extends('layouts.app');

@section('content')
    <div class= "w-[1200px] m-auto">
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>

        @if(count($post->tags) > 0)
            <ul>
                @foreach ($post->tags as $tag)
                    <li>{{$tag->name}}</li>
                @endforeach
            </ul>
        @endif
        <a href="{{route('admin.posts.index')}}">Back Home</a>
    </div>
@endsection
