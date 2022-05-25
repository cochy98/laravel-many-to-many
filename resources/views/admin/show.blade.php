@extends('layouts.app')

@section('content')
<div class="show-page container-fluid p-5">
  <div class="row">
    <div class="col-9">
      <h4><a href="{{ route('admin.posts.index') }}" class="return-link">Torna ai post</a></h4>

      <div class="my-card">
        <div class="my-card-header">
          <h2 class="title">{{ ucfirst($post->title) }}</h2>
          <h5 class="author">{{ $post->author }}</h5>
          @foreach ($post->categories as $category)
            <span class="badge rounded-pill ms-2" style="background-color: {{$category->colour}}" >{{$category->name}}</span>
          @endforeach
        </div>
        <img src="{{ $post->image_url }}" alt="Picture of {{ $post->title }}" class="my-card-img">
        <div class="my-card-text">
          <p class="text">{{ $post->content }}</p>
        </div>
      </div>
    </div>
    @include('partials/sidebar')
  </div>

  <div class="d-flex justify-content-center pt-5">
    <a href="{{ route('admin.posts.show', $post->id - 1) }}" class="btn my-btn btn-secondary">Prev</a>
    <a href="{{ route('admin.posts.show', $post->id + 1) }}" class="btn my-btn btn-success">Next</a>
  </div>
</div>
@endsection
