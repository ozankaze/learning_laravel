@extends('layouts.app')

@section('title')
	Hamalan Data Post
@endsection

@section('content')
	<h1>Halaman Posts</h1>

    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
                <a href="{{ route('post.show', $post['id']) }}"><li>{{ $post['title'] }}</li></a>
            @endforeach
        </ul>
        @else
        <p>Data Tidak Ada</p>
    @endif
@endsection