@extends('app.layout')

@section('content')

  <div class="container">
      <h1 class="title">
        {{ $blog->title }}
      </h1>
      <div class="card">
          <div class="media-content">
            <p class="title" style="font-size: 20px;">Blog Content</p>
            <p class="subtitle">{{ $blog->content }}</p>
          </div>

          <p class="myTitle">Comments</p>

          @foreach( $blog->comments as $comment)
            <div class="content">
              {{ $comment->comment }}
            </div>
          @endforeach
        </div>
    </div>

@endsection
