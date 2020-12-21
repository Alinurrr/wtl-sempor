@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Ini Halaman Managemen User</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">WTL User</h2>
        <form class="form-group" action="{{ route('search-user') }}" method="GET">
            <div class="col-6 input-group mb-3">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" name="query" value="{{old('query')}}">
                <button class="btn btn-info" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>


        {{-- master --}}
        @if (auth()->user()->level=="master")

        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Master</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Nama</th>
                        <th>id</th>
                        <th>E-Mail</th>
                        <th>Level</th>
                        <th>Waktu Registrasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 0
                    @endphp
                    @foreach ($master_users as $user)
                    @php
                        $no++
                    @endphp

                      <tr>
                        <td>
                          {{$no}}
                        </td>

                        <td>{{$user->name}}</td>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>

                        <td>{{$user->created_at->format("D, d/M/Y")}}</td>


                        <td>
                            <a href="/adm/user/{{$user->id}}" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                {{-- <form action="/adm/product/{{$product->slug}}/delete" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                    @csrf
                                    @method("delete")

                                        <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></i></button>
                                </form> --}}
                        </td>
                      </tr>



                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif

        {{-- admin --}}
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Admin</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Nama</th>
                        <th>id</th>
                        <th>E-Mail</th>
                        <th>Level</th>
                        <th>Waktu Registrasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 0
                    @endphp
                    @foreach ($admin_users as $user)
                    @php
                        $no++
                    @endphp

                      <tr>
                        <td>
                          {{$no}}
                        </td>

                        <td>{{$user->name}}</td>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>

                        <td>{{$user->created_at->format("D, d/M/Y")}}</td>


                        <td>
                                <a href="/adm/user/{{$user->id}}" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                {{-- <form action="/adm/product/{{$product->slug}}/delete" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                    @csrf
                                    @method("delete")

                                        <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></i></button>
                                </form> --}}
                        </td>
                      </tr>



                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- user --}}
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>User</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Nama</th>
                        <th>id</th>
                        <th>E-Mail</th>
                        <th>Level</th>
                        <th>Waktu Registrasi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 0
                    @endphp
                    @foreach ($users as $user)
                    @php
                        $no++
                    @endphp

                      <tr>
                        <td>
                          {{$no}}
                        </td>

                        <td>{{$user->name}}</td>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->level}}</td>

                        <td>{{$user->created_at->format("D, d/M/Y")}}</td>


                        <td>
                            <a href="{{route('user-show', $user->id)}}" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                {{-- <form action="/adm/product/{{$product->slug}}/delete" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                    @csrf
                                    @method("delete")

                                        <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></i></button>
                                </form> --}}
                        </td>
                      </tr>



                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>





        </div>



    </div>
</section>
</div>
@endsection
