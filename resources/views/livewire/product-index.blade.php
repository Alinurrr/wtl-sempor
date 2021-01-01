<div>
    <!-- Intro Section -->
    <header>
        <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url({{ asset('fe-wtl/img/banner/wtl-4.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <div class="mask rgba-stylish-light">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row pt-5 mt-3">
                        <div class="col-md-12 mb-3">
                            <div class="intro-info-content text-center">
                                <h1 class="display-3 white-text mb-5 wow fadeInDown" data-wow-delay="0.3s">Produk <a class="white-text font-weight-bold">WTL</a></h1>
                                <h5 class="text-uppercase white-text mb-5 mt-1 font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Lorem ipsum dolor sit amet consectetur. </h5>
                                <a class="btn btn-light-blue btn-lg wow fadeInDown" data-wow-delay="0.3s">portfolio</a>
                                <a class="btn btn-indigo btn-lg wow fadeInDown" data-wow-delay="0.3s">About</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--End Intro Section -->

    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mt-4">
                        <li class="breadcrumb-item"><a href="index.html" class="text-dark">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="input-group mb-3">
                    <input wire:model="search" type="text" class="form-control" placeholder="Search Product" aria-label="Search" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                </div>
                <div class="card bg-light mb-3">
                    <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                    <ul class="list-group category_block">
                        <li class="list-group-item text-capitalize"><a href="{{route('product')}}">All</a></li>
                        @foreach  ($categories as $category)
                        <li class="list-group-item text-capitalize"><a href="{{route('products.category', [$category->id,$category->slug])}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col">
                <!-- Grid row -->
            <div class="row ">

                @foreach ($products as $product)

                <!-- Grid column -->
                <div class="col-lg-4 col-sm-6 col-md-4 mb-4">
                <!-- Card -->
                <div class="card  card-cascade wider card-ecommerce">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                    <img src="/{{$product->gambar}}"
                        class="card-img-top" alt="sample photo" style="height: 270px; object-fit: cover; object-position: center;">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>
                    <!-- Card image -->
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center pb-0">
                    <!-- Description -->
                    <span class="badge badge-info">{{$product->category->name}}</span>
                    <!-- Title -->
                    <h5 class="card-title mt-3">
                        <strong>
                        <a href="{{route('product.detail', [$product->id,$product->slug])}}">{{$product->judul}}</a>
                        </strong>
                    </h5>
                    <!-- Card footer -->
                    <div class="card-footer mt-4">
                        <p class="float-left font-weight-bold mb-1 pb-2">Rp. {{$product->harga}}</p>
                    </div>
                    </div>
                    <!-- Card content -->
                </div>
                <!-- Card -->
                </div>
                <!-- Grid column -->

                @endforeach


            </div>
            <!-- Grid row -->
            <div class="row">
                <div class="col">
                    {{$products->links()}}
                </div>
            </div>
            </div>

        </div>
    </div>


</div>
