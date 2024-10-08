@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">
                    {{ $post->title }}
                </h2>
                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                        {{ $post->author->name }}</a> in
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}</a>
                        <i class="bi bi-eye float-end"> {{ $post->views }} views</i>
                </p>
                
                @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid">
                            @else
                                <img src="{{ 'img/kosong.jpg' }}" alt="{{ $post->category->name }}"
                                    class="img-fluid ">
                            @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block">Back to Posts</a>
            </div>
        </div>
    </div>    
@endsection
