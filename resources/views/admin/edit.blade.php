@extends('layouts.app')
@section('title', 'Edit')
@section('content')
    <div class="container">
        <h1 class="text-center py-5">Modifica Post</h1>
        <div class="wrapper-form">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="content">Contenuto</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image_url">Immagine post</label>
                    <input type="text" name="image_url" id="image_url" class="form-control" value="{{ $post->image_url }}">
                </div>
                <div class="mb-3">
                    <label for="category_id">Categoria</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
