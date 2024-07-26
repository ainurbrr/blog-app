@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-8">
                <h2 class="mb-3">
                    {{ $post->title }}
                </h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn bg-danger border-0" onclick="return confirm('Are you sure to delete post?')"><span
                            data-feather="trash-2"></span> Delete</button>
                </form>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image }}" class="img-fluid mt-3">
                    </div>
                @else
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ 'img/kosong.jpg' }}" alt="{{ $post->image }}" class="img-fluid mt-3">
                    </div>
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
