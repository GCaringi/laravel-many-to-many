@extends('layouts.app')

@section('content')
    <div class="w-[1200px] m-auto">
        <div class="grid grid-cols-6">
            @foreach ($tags as $tag)
                <a href="{{route('admin.tags.show', $tag->id)}}">
                    {{$tag->name}}    
                </a>
                <a href="{{route('admin.tags.edit', $tag->id)}}">Edit</a>
                <form action="{{route('admin.tags.destroy', $tag->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endforeach
        </div>
        <a href="{{route('admin.tags.create')}}">Create</a>
    </div>
@endsection