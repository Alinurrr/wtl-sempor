<style>

    .navbar {
        background-color: black;
        position: relative;
        display: flex;
        flex-wrap: wrap;
        }

    /* input number */
    .number-input input[type="number"] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
    }

    .number-input input[type=number]::-webkit-inner-spin-button,
    .number-input input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    }

    .number-input {
    display: flex;
    justify-content: space-around;
    align-items: center;
    }

    .number-input button {
    -webkit-appearance: none;
    background-color: transparent;
    border: none;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    margin: 0;
    position: relative;
    }

    .number-input button:before,
    .number-input button:after {
    display: inline-block;
    position: absolute;
    content: '';
    height: 2px;
    transform: translate(-50%, -50%);
    }

    .number-input button.plus:after {
    transform: translate(-50%, -50%) rotate(90deg);
    }

    .number-input input[type=number] {
    text-align: center;
    }

    .number-input.number-input {
    border: 1px solid #ced4da;
    width: 10rem;
    border-radius: .25rem;
    }

    .number-input.number-input button {
    width: 2.6rem;
    height: .7rem;
    }

    .number-input.number-input button.minus {
    padding-left: 10px;
    }

    .number-input.number-input button:before,
    .number-input.number-input button:after {
    width: .7rem;
    background-color: #495057;
    }

    .number-input.number-input input[type=number] {
    max-width: 4rem;
    padding: .5rem;
    border: 1px solid #ced4da;
    border-width: 0 1px;
    font-size: 1rem;
    height: 2rem;
    color: #495057;
    }



    @media not all and (min-resolution:.001dpcm) {
    @supports (-webkit-appearance: none) and (stroke-color:transparent) {

    .number-input.def-number-input.safari_only button:before,
    .number-input.def-number-input.safari_only button:after {
    margin-top: -.3rem;
    }
    }
    }

</style>


<div mt-5>
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


            <div class="border p-4 rounded  ">


              <p class="h5 mb-3">Jumlah Beli</p>

              <div class="def-number-input number-input safari_only ">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                <input class="quantity" min="0" name="quantity" value="1" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
              </div>


              <div class="font-weight-normal">

                <div class="mt-3">
                  <div class="row mt-3 mb-4">
                    <div class="col-md-12">
                      <button class="btn btn-primary btn-rounded">
                        <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</button>
                    </div>
                  </div>
                </div>

              </div>

            </div>

            </div>
          </div>

        </section>
        <!--Section: Content-->


      </div>

    </div>
</div>
