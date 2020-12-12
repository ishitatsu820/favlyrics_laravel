@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Post Register') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('posts.new') }}">
            @csrf
            <div class="form-group row">
              <label for="posts_title" class="col-md-4 col-form-label text-md-right">{{ __('Post Title') }}</label>
                <div class="col-md-6">
                  <input id="posts_title" type="text" class="form-control" name="posts_title" value="" autocomplete="" autofocus>
                </div>
              <label for="fav_lyrics" class="col-md-4 col-form-label text-md-right">{{ __('Fav Lyrics') }}</label>
                <div class="col-md-6">
                  <textarea id="fav_lyrics" cols="" rows="15" type="text" class="form-control" name="fav_lyrics" value="" autocomplete="" placeholder="{{__('What is your favorite lyrics?')}}" autofocus></textarea>
                </div>
              <label for="music_title" class="col-md-4 col-form-label text-md-right">{{ __('Music Title') }}</label>
                <div class="col-md-6">
                  <input id="music_title" type="text" class="form-control" name="music_title" value="" autocomplete="" autofocus>
                </div>
              <label for="artist" class="col-md-4 col-form-label text-md-right">{{ __('Artist') }}</label>
                <div class="col-md-6">
                  <input id="artist" type="text" class="form-control" name="artist" value="" autocomplete="" autofocus>
                </div>
              
            </div>
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                {{ __('Posting') }}
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
