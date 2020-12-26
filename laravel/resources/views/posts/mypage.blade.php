@extends('layouts.app')

@section('content')

<!-- 投稿一覧 -->
<div class="container">
        <h2>{{ __('Post List') }}</h2>
        <div class="row">

            @foreach ($posts as $post)

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">{{ __('Post Detail')  }}</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">{{ __('Post Edit')  }}</a>
                        <form action="{{ route('posts.delete', $post->id) }}" method="post" class="d-inline">
                        @csrf
                        <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>{{__('Post Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
@endsection

