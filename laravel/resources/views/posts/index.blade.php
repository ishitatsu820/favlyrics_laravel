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
<section id="posts" class="container">
  <div class="section-title">
      <h2>投稿一覧</h2>
  </div>

  <div class="section-contents">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
     <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
    </div>
  </div>

</section>
@endsection

