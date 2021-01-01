@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Ini Halaman Artikel</h1>
    </div>

    <div class="section-body">
        <div class="row mr-3 mb-3">
            <h2 class="section-title">Article WTL</h2>
            <div class="ml-auto" style="margin: 20px 0 25px 0;">
                <a href="{{ route('article-create') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Artikel</a>
            </div>
        </div>

        <form class="form-group" action="{{ route('search-article') }}" method="GET">
            <div class="col-6 input-group mb-3">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" name="query" value="{{old('query')}}">
                <button class="btn btn-info" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>

        <div class="row">
            @foreach ($articles as $article)

            <div class="col-12 col-md-4 col-lg-4 my-2">
              <div class="article article-style-c h-100 card">
                <div class="article-header">
                  <img src="/{{$article->thumbnail}}" alt="" style="height: 270px; object-fit: cover; object-position: center;" class="d-flex align-items-center">
                  {{-- <img class="article-image" data-background="/{{$article->thumbnail}}" style="background-image: url(&quot;{{asset('/') . $article->thumbnail}}&quot;);"> --}}
                </div>
                <div class="article-details">
                  <div class="article-category"><a href="#">{{$article->article_category->name}}</a> <div class="bullet"></div> <a href="#">{{$article->created_at->diffForHumans()}}</a></div>
                  <div class="article-title">
                    <h2><a href="/adm/article/{{$article->slug}}">{{$article->title}}</a></h2>
                  </div>
                  <p>{!!Str::limit($article->body, 30)!!}</p>

                  <div class="article-user">
                    <img alt="image" src="{{asset('stisla/img/avatar/avatar-1.png')}}">
                    <div class="article-user-details">
                      <div class="user-detail-name">
                        <a href="{{route('user-show', $article->author->id)}}">{{$article->author->name}}</a>
                      </div>
                      <div class="text-job">Web Developer</div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            @endforeach


            {{-- <div class="col-12 col-md-4 col-lg-4">
              <article class="article article-style-c">
                <div class="article-header">
                  <div class="article-image" data-background="{{asset('stisla/img/news/img14.jpg')}}" style="background-image: url(&quot;assets/img/news/img14.jpg&quot;);">
                  </div>
                </div>
                <div class="article-details">
                  <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                  <div class="article-title">
                    <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                  </div>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. </p>
                  <div class="article-user">
                    <img alt="image" src="{{asset('stisla/img/avatar/avatar-3.png')}}">
                    <div class="article-user-details">
                      <div class="user-detail-name">
                        <a href="#">Rizal Fakhri</a>
                      </div>
                      <div class="text-job">UX Designer</div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <article class="article article-style-c">
                <div class="article-header">
                  <div class="article-image" data-background="{{asset('stisla/img/news/img01.jpg')}}" style="background-image: url(&quot;assets/img/news/img01.jpg&quot;);">
                  </div>
                </div>
                <div class="article-details">
                  <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                  <div class="article-title">
                    <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                  </div>
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. </p>
                  <div class="article-user">
                    <img alt="image" src="{{asset('stisla/img/avatar/avatar-2.png')}}">
                    <div class="article-user-details">
                      <div class="user-detail-name">
                        <a href="#">Irwansyah Saputra</a>
                      </div>
                      <div class="text-job">Mobile Developer</div>
                    </div>
                  </div>
                </div>
              </article>
            </div> --}}
          </div>

    </div>
</section>
</div>
@endsection
