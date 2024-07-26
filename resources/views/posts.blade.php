@extends('layouts.main')

@section('container')
    <div class="blog-grid-section pt-50 pb-150 pt-lg-120 pb-lg-120 pt-md-80 pb-md-80 pt-xs-50 pb-xs-50">
        <h1 class="mb-3 text-center">{{ $title }}</h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-title text-center mb-50">
                        <div class="sub-title mb-10" data-aos="fade-up" data-aos-delay="150">
                            <p>Our Recent Articles</p>
                        </div>
                        <div class="title" data-aos="fade-up" data-aos-delay="200">
                            <h2>Latest Blog & News</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form action="/posts">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="blog-grid-wrap card mb-4 p-2">
                @if ($posts[0]->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                            class="img-fluid" style="height: 745px object-fit: cover;">
                    </div>
                @else
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ 'img/kosong.jpg' }}" alt="{{ $posts[0]->category->name }}" class="img-fluid " style="height: 745px object-fit: cover;">
                    </div>
                @endif

                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                    <p>
                    <div class="meta">
                        By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none" style="margin-right: 0px">
                            {{ $posts[0]->author->name }}</a> in
                        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                            {{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}.
                    </div>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-success">Read more...</a>
                </div>
            </div>
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-grid-wrap" data-aos="fade-up" data-aos-delay="150">
                            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0.7)">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a>
                            </div>
                            <div class="blog-img">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" style="width: 370px; height: 233px; object-fit: cover;"
                                        class="img-fluid">
                                @else
                                    <img src="{{ 'img/kosong.jpg' }}" alt="{{ $post->category->name }}" style="width: 370px; height: 233px; object-fit: cover;"
                                        class="img-fluid ">
                                @endif
                            </div>
                            <div class="meta">
                                <a href="/posts?author={{ $post->author->username }}">
                                    <img src="/img/user/icon/user.svg" alt="icon">
                                    {{ $post->author->name }}
                                </a>
                                <a>
                                    <img src="/img/user/icon/archive.svg" alt="icon">
                                    {{ $post->created_at->diffForHumans() }}
                                </a>
                            </div>
                            <h3 class="title">
                                <a href="/posts/{{ $post->slug }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <div class="text">
                                <p>{{ $post->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row text-center mt-20">
                <div class="mt-3" data-aos="fade-up" data-aos-delay="200">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
