<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
    {{Auth::user()->name}}
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    @section('content')
        <h1>Blog Name</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p> 
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                   <a href='/posts/{{$post->id}}'><h2 class='title'>{{ $post->title }}</h2></a
                   <p class='body'>{{ $post->body }}</p>
                   <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                </div>
            @endforeach
            
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <div>
        @foreach($questions as $question)
            <div>
              <a href="https://teratail.com/questions/{{ $question['id'] }}">
                {{ $question['title'] }}
              </a>
             </div>
        @endforeach
        </div>
    @endsection    
    </body>
</html>
