@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Ini Halaman Dashboard</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    {{$admin}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    {{$jmlArticle}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Product</h4>
                  </div>
                  <div class="card-body">
                    {{$jmlProduct}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Users</h4>
                  </div>
                  <div class="card-body">
                    {{$user}}
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Invoices</h4>
                  <div class="card-header-action">
                    <a href="{{route('pesanan-admin')}}" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th>Invoice ID</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Due Date</th>
                        <th>Action</th>
                      </tr>
                      @foreach ($pesanans as $pesanan)

                      <tr>
                        <td><a href="{{ route('pesanan-edit', $pesanan->kode_pemesanan) }}">{{$pesanan->kode_pemesanan}}</a></td>
                        <td class="font-weight-600">{{$pesanan->user->name}}</td>
                        <td>
                            @if ($pesanan->status == 0 )
                            <span class="badge badge-light">Kerangjang</span>
                            @elseif($pesanan->status == 1)
                            <span class="badge badge-info">Belum Dibayar</span>
                            @elseif($pesanan->status == 2)
                            <span class="badge badge-warning">Pesanan Proses</span>
                            @elseif($pesanan->status == 3)
                            <span class="badge badge-secondary">Pesanan Kirim</span>
                            @elseif($pesanan->status == 4)
                            <span class="badge badge-success">Done :)</span>
                            @endif
                        </td>
                        <td>{{$pesanan->created_at->format("D, d/M/Y")}}</td>
                        <td>
                          <a href="{{ route('pesanan-edit', $pesanan->kode_pemesanan) }}" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>

                      @endforeach

                    </tbody></table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                    <i class="far fa-question-circle"></i>
                  </div>
                  <h4>WTL</h4>
                  <div class="card-description">Berita Terbaru</div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    @foreach ($articles as $article)

                    <a href="/adm/article/{{$article->slug}}" class="ticket-item">
                      <div class="ticket-title">
                        <h4>{{$article->title}}</h4>
                      </div>
                      <div class="ticket-info">
                        <div>{{$article->author->name}}</div>
                        <div class="bullet"></div>
                        <div class="text-primary">{{$article->created_at->diffForHumans()}}</div>
                      </div>
                    </a>
                    @endforeach

                    <a href="{{route('article-admin')}}" class="ticket-item ticket-more">
                      View All <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>
</div>
@endsection
