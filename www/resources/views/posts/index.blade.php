@extends('layouts.admin')

@section('content')
{{count($posts)}}
<h1>Post</h1>
@foreach ($posts as $post)
    <div class="well">
    <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small> Written on {{$post->created_at}}</small>
    </div>
    
@endforeach
@endsection