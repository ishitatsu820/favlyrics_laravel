@extends('layouts.app')


@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post Detail').'「'.$post->title.'」' }}</div>

                    <div class="card-body text-center">
                        <p>{{ $post->lyrics }}</p>
                        <p>{{ $post->music_title }}</p>
                        <p>{{ $post->artist }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
