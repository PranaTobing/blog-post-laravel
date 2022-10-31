@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                            data-feather="x-circle"></span> Delete</button>
                </form>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid mt-3"
                            alt="{{ $post->category->slug }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/800x200?{{ $post->category->slug }}"
                        class="card-img-top img-fluid mt-3" alt="{{ $post->category->slug }}">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/dashboard/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
