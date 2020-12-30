@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Post Register') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            <div class="form-group row">
              <label for="posts_title" class="col-md-4 col-form-label text-md-right">{{ __('Post Title') }}</label>
                <div class="col-md-6">
                  <input id="posts_title" type="text" class="form-control @error('posts_title') is-invalid @enderror" name="title" value="{{ $post->title }}" autocomplete="" autofocus>
                  @error('posts_title')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
            <div class="form-group row">
              <label for="lyrics" class="col-md-4 col-form-label text-md-right">{{ __('Fav Lyrics') }}</label>
                <div class="col-md-6">
                  <textarea id="lyrics" cols="" rows="15" type="text" class="form-control @error('lyrics') is-invalid @enderror" name="lyrics" autocomplete="" placeholder="{{__('What is your favorite lyrics?')}}" autofocus>{{ $post->lyrics }}</textarea>
                  @error('lyrics')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
            <div class="form-group row">
              <label for="music_title" class="col-md-4 col-form-label text-md-right">{{ __('Music Title') }}</label>
                <div class="col-md-6">
                  <input id="music_title" type="text" class="form-control @error('music_title') is-invalid @enderror" name="music_title" value="{{ $post->music_title }}" autocomplete="" autofocus>
                  @error('music_title')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
            </div>
            <div class="form-group row">
              <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Artist') }}</label>
                <div class="col-md-6">
                  <input id="artist" type="text" class="form-control @error('artist') is-invalid @enderror" name="artist" value="{{ $post->artist }}" autocomplete="" autofocus>
                  @error('artist')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>  
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                {{ __('Edit') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
