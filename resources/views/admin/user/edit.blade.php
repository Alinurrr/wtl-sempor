@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Ini Halaman Edit Profile</h1>
    </div>

    <div class="section-body">

        <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
            <form action="{{ route('user-update', $user->id )}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                <div class="card-header">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-12 col-12">
                        <label>Nama Lengkap</label>
                        <input name="name" type="text" class="form-control" value="{{old('name') ?? $user->name}}" required="">
                        @error('name')
                            <div class="mt-2 text-danger">
                            {{$message}}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group col-md-6 col-12">
                        <label>Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" value="{{date('Y-m-d', strtotime($user->tanggal_lahir))}}">
                      </div>
                      <div class="form-group col-md-6 col-12">
                        <label>Jenis Kelamin</label>
                        <select class="form-control selectric" name="gender">
                            <option disabled="" selected="">Pilih Satu Yuk</option>
                            <option {{$user->gender == "L" ? 'selected' : ''}} value="L">Laki - laki</option>
                            <option {{$user->gender == "P" ? 'selected' : ''}} value="P">Perempuan</option>
                            <option {{$user->gender == "O" ? 'selected' : ''}} value="O">Lainnya</option>
                            <option value="">Tidak ingin menyebutkan</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" value="{{old('email') ?? $user->email}}" required="">
                        @error('email')
                            <div class="mt-2 text-danger">
                            {{$message}}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group col-md-5 col-12">
                        <label>Phone</label>
                        <input name="no_hp" type="tel" class="form-control" value="{{old('no_hp') ?? $user->no_hp}}" required>
                        @error('no_hp')
                            <div class="mt-2 text-danger">
                            {{$message}}
                            </div>
                        @enderror
                      </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div>

    </div>
</section>
</div>
@endsection
