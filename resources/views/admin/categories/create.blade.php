@extends('layouts.app')

@section('content')
    <div class = "w-[1200px] m-auto">
        <div class="grid grid-cols-6">
            <form action="{{route('admin.tags.store')}}" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class= "@error('name') is-invalid @enderror">
                @error('name')
                    <p class="error">{{$message}}</p>
                @enderror
                <button type="submit">Create</button>
            </form>
        </div>
        <a href="{{route('admin.tags.index')}}">Back Home</a>
@endsection