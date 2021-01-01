<div class="container mt-5">


    <!--Section: Content-->
    <section class="dark-grey-text">

      <!-- Section heading -->
      <h2 class="text-center font-weight-bold mb-4 pb-2">Berita Wahana Tirta Lestari</h2>
      <!-- Section description -->
      <p class="text-center mx-auto w-responsive mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>
      <div class="card mt-4">
        <div class="card-header">
          <h4>Kategori</h4>
        </div>
        <div class="card-body">
          <div class="row">

            <a href="{{ route('article') }}" class="col mb-4 mb-lg-0 text-center btn">
                <img src="{{ asset('/img/categories/all.svg') }}" alt="">
                <div class="mt-2 font-weight-bold text-capitalize">all</div>
            </a>
            @foreach ($categories as $category)

            <a href="{{route('article.category', [$category->id,$category->slug])}}" class="col mb-4 mb-lg-0 text-center btn">
                <img src="{{ asset('/img/categories') . '/' . $category->gambar}}" alt="">
                <div class="mt-2 font-weight-bold text-capitalize">{{$category->name}}</div>
            </a>

            @endforeach

          </div>
        </div>
    </div>


    {{-- post --}}
        @foreach ($articles as $article)
        <!-- Grid row -->
        <div class="row align-items-center my-5">

            <!-- Grid column -->
            <div class="col-lg-5 col-xl-4">

            <!-- Featured image -->
            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                <img class="img-fluid" src="/{{$article->thumbnail}}" alt="Sample image" >
                <a style="cursor: auto">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7 col-xl-8">

            <!-- Post title -->
            <h4 class="font-weight-bold mb-3"><strong>{{$article->title}}</strong></h4>
            <span class="badge badge-info">{{$article->article_category->name}}</span>
            <!-- Excerpt -->
            <p class="dark-grey-text">{!!Str::limit($article->body, 200)!!}</p>
            <!-- Post data -->
            <p>by <a class="font-weight-bold">{{$article->author->name}}</a>, {{$article->created_at->format("d/M/Y ")}}</p>
            <!-- Read more button -->
            <a href="{{route('article.detail', [$article->id,$article->slug])}}" class="btn btn-primary btn-md mx-0 btn-rounded">Read more</a>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->
        @endforeach


      <hr class="my-5">

    </section>
    <!--Section: Content-->


  </div>
