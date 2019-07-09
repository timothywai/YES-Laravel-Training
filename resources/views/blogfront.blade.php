@extends('app.layout')

@section('content')

  <div class="container">
      <h1 class="title">
        Blogs
      </h1>
      @foreach( $allblogs as $eblog )
        <div class="card">
          <div class="title" style="margin-bottom: 15px;">
            <a href="/blogs/{{ $eblog->id }}"> {{ $eblog->title }} </a>
          </div>

        </div>
      @endforeach
    </div>

@endsection
