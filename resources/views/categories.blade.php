@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-xl-center mt-10">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card text-bg-dark text-white">
                            @if ($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                    class="img-fluid" style="height: 280px">
                            @else
                                <img src="{{ 'img/kosong.jpg' }}" alt="{{ $category->name }}"
                                    class="img-fluid" style="height: 280px">
                            @endif
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
