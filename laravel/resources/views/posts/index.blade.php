@extends('layouts.app')

@section('content')

<!-- heroバナー -->
<section id="hero" class="container-fluid">
  <div class="hero">
      <div class="hero-title">
        <h2>Let's share your best music, best lyrics.</h2>
      </div>
  </div>
</section>

<!-- aboutセクション -->
<section id="about" class="container">
  <div class="section-title">
    <h2>About</h2>
  </div>
  <div class="section-contents p-about">
    Fav Lyricsは自分のお気に入りの曲の歌詞を共有できるサービスです。もちろん他の人のお気に入りの歌詞を見ることもできます。一人のときに聞いた曲、友達・恋人と一緒に聴いた曲、ライブ会場で聞いた曲、懐かしい曲、メジャーな曲、周りの人が知らないようなマイナーな曲、テンションが上がる曲、泣けてくる曲...その時感じた想いとともに、お気に入りの歌詞を共有してみませんか。
  </div>
    
</section>

<!-- 投稿一覧 -->
<div class="container">
        <h2>{{ __('Post List') }}</h2>
        <div class="row">

            @foreach ($posts as $post)

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $post->title }}</h3>
                        <a href="#" class="btn btn-primary">{{ __('Post Detail')  }}</a>
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

