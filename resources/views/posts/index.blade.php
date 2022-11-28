@extends('master')

@section('body')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
                <div class="h1 text-center">{{config('app.name')}}</div>
                <div class="list-group">
                    @foreach($posts as $post)
                        <blog-post
                            :post-id="{{$post->id}}"
                            :title="'{{$post->title}}'"
                            :comments="{{$post->comments_count}}"
                            >
                        </blog-post>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
