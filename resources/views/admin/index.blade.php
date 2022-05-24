@extends('layouts.app')

@section('content')
<div class="admin-page container-fluid p-5">
  <div class="row">
    <div class="col-12">
      <h1>{{ ucfirst(Auth::user()->name) }}, questi sono i post suggeriti per te!</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-9">
        @foreach ($posts as $post)
        <div class="my-card d-flex">
          <img src="{{ $post->image_url }}" alt="Picture of {{ $post->title }}" class="my-card-img">
          <div class="my-card-content">
            <div class="my-card-body">
              <div class="my-card-header">
                <h2 class="title">{{ ucfirst($post->title) }}</h2>
                <h5 class="author">{{ $post->author }}</h5>
              </div>
              <div class="my-card-text">
                <p class="text">{{ $post->content }}</p>
              </div>
            </div>
            <div class="my-card-footer">
              @foreach ($post->categories as $category)
                <span class="badge rounded-pill me-2" style="background-color: {{$category->colour}}" >{{$category->name}}</span>
              @endforeach
              <a href="{{ route('admin.posts.show', $post->id) }}">Leggi di piu...</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    @include('partials/sidebar')
  </div>

  <div class="d-flex justify-content-center pt-5">
    {{-- Mostro una nav per cambiare pagina --}}
    {{ $posts->links() }}
  </div>
</div>
@endsection
