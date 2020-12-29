<div>
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{ route('product') }}" class="text-dark">List Product</a> </li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Jersey</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                @endif
            </div>
        </div>
    </div>

      <div class="container mb-5 pb-5 z-depth-1">



        <!--Section: Content-->
        <section >

          <!-- Section heading -->

          <div class="row pt-5">
            <div class="col-lg-4 mb-3">

                <img src="/{{$product->gambar}}" alt="First slide" class="img-fluid">


            </div>

            <div class="col-lg-5 text-md-left">

              <h2 class="h2-responsive text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">{{$product->judul}}</h2>
              <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">{{$product->category->name}}</span>

              <h3 class="h3-responsive text-md-left mb-4 ml-xl-0 ml-4">
                <span class="red-text font-weight-bold">
                  <strong>Rp. {{$product->harga}}</strong>
                </span>
                {{-- <span class="grey-text">
                  <small>
                    <s>$1789</s>
                  </small>
                </span> --}}
              </h3>

              <div class="font-weight-normal">

                <p class="ml-xl-0 ml-4">{!!$product->desc!!}</p>




              </div>

            </div>
            <div class="col-lg-3 text-md-left">


                <div class="border p-4 rounded ">


                    <p class="h5 mb-3">Jumlah Beli</p>

                <form wire:submit.prevent="masukkankeranjang" >
                    <!-- Material input -->
                    {{-- <div class="md-form">
                        <input wire:model="jumlah_pesanan" type="number" id="jumlah_pesanan" name="jumlah_pesanan"  class="form-control">
                        <label for="numberExample">Example label</label>
                    </div> --}}
                    <!-- Material input -->
                    <div class="form-group">
                        <input type="number" id="numberExample" class="form-control" wire:model="jumlah_pesanan" placeholder="min beli 1" min="1">
                        @error('jumlah_pesanan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="font-weight-normal">

                        <div class="mt-3">
                        <div class="row mt-3 mb-4">
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-rounded">
                                <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart
                            </button>
                            </div>
                        </div>
                        </div>

                    </div>
                </form>



                </div>

            </div>
          </div>

        </section>
        <!--Section: Content-->


      </div>

      </div>
</div>
