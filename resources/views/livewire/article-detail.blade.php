<div class="container mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{ route('article') }}" class="text-dark">Berita</a> </li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!--Section: Content-->
    <section class="mx-md-5 dark-grey-text">

        <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-9">
            <p class="h1 mb-3">{{$article->title}}</p>

            <!-- Card -->
            <div class="card card-cascade wider reverse">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                <img class="card-img-top" src="/{{$article->thumbnail}}" alt="Sample image">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                <!-- Title -->
                <h6>
                    <a href="categories/{{$article->article_category->slug}}">
                        <span class="badge badge-primary my-2">{{ $article->article_category->name}}</span>
                    </a>
                    <h3 class="font-weight-bold"><a>{{$article->title}}</a></h3>
                </h6>
                <!-- Data -->
                <p>Written by <a><strong>{{$article->author->name}}</strong></a>, {{$article->created_at->format("D, d/M/Y (H:i:s)")}}</p>
                <!-- Social shares -->


                </div>
                <!-- Card content -->

            </div>
            <!-- Card -->

            <!-- Excerpt -->
            <div class="mt-5">

                <p>{!!$article->body!!}</p>


            </div>

        </div>
        <!-- Grid column -->
        <div class="col-lg-3 mt-5">
            <p class="h4">Berita terkait</p>
            @foreach ($articleTerkaits as $articleTerkait)
            <!-- Card -->
            <div class="card hoverable my-3">


                <!-- Card content -->
                <div class="card-body border">

                    <!-- Title -->
                    <a href="#!" class="black-text">{{$articleTerkait->title}}</a>
                    <!-- Text -->
                    <p class="card-title text-muted font-small mt-3 mb-2">{!!Str::limit($articleTerkait->body, 30)!!}</p>

                    <a href="{{route('article.detail', [$articleTerkait->id,$articleTerkait->slug])}}" type="button" class="btn btn-primary text-white p-1 mx-0">Read more<i class="fa fa-angle-right ml-2"></i></a>

                </div>

                </div>
                <!-- Card -->
            @endforeach
        </div>

    </div>
    <!-- Grid row -->

    <hr class="mb-5 mt-4">

</section>
<!--Section: Content-->


  </div>
