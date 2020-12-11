@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Ini Halaman Artikel</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">Article WTL</h2>
        <div class="ml-auto mr-3 mb-3">
            <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Artikel</a>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
              <article class="article article-style-c">
                <div class="article-header">
                  <div class="article-image" data-background="{{asset('stisla/img/news/img13.jpg')}}" style="background-image: url(&quot;{{asset('img/news/img13.jpg')}}&quot;);">
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
                    <img alt="image" src="{{asset('stisla/img/avatar/avatar-1.png')}}">
                    <div class="article-user-details">
                      <div class="user-detail-name">
                        <a href="#">Hasan Basri</a>
                      </div>
                      <div class="text-job">Web Developer</div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
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
            </div>
          </div>

    </div>
</section>
</div>
@endsection
