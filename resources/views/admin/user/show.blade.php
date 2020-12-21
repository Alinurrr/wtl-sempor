@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Ini Halaman Detail User</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title">{{$user->name}}</h2>
        <p class="section-lead">
          Change information about yourself on this page.
        </p>

        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-7">
            <div class="card profile-widget">
              <div class="profile-widget-header">
                <img alt="image" src="{{ asset('stisla/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Posts</div>
                    <div class="profile-widget-item-value">187</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Followers</div>
                    <div class="profile-widget-item-value">6,8K</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Following</div>
                    <div class="profile-widget-item-value">2,1K</div>
                  </div>
                </div>
              </div>
              <div class="profile-widget-description">
                <div class="profile-widget-name text-capitalize">{{$user->name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{$user->level}}</div> <a href="/adm/user/{{$user->id}}/editlevel"><small class="text-success"> - Edit Level</small></a> </div>
                <form method="post" class="needs-validation" novalidate="">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-7 col-12">
                                <label>Tanggal Lahir</label>
                                @if ($user->gender == null)
                                    <p class="text-secondary">Belum Menambhakan Tanggal Lahir</p>
                                @else
                                    <p>{{ date('d F Y', strtotime($user->tanggal_lahir)) }}</p>
                                @endif
                            </div>

                            <div class="form-group col-md-5 col-12">
                                <label>Jenis Kelamin</label>
                                @if ($user->gender == "L")
                                    <p>Laki - Laki</p>

                                @elseif ($user->gender == "P")
                                    <p>Perempuan</p>

                                @elseif ($user->gender == "o")
                                    <p>Lainnya</p>

                                @else
                                    <p class="text-secondary">Belum Menambhakan Jenis Kelamin</p>

                                @endif
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-7 col-12">
                                <label>Email</label>
                                <p>{{$user->email}}</p>
                            </div>
                            <div class="form-group col-md-5 col-12">
                                <label>Phone</label>
                                @if ($user->no_hp == null)
                                    <p class="text-secondary">Belum Menambhakan Nomor Telephon</p>
                                @else
                                    <p>{{$user->no_hp}}</p>
                                @endif
                          </div>
                        </div>

                    </div>
                    @if (Auth::user()->id == ($user->id))
                        <div class="card-footer text-right">
                            <a href="{{ route('user-edit', $user->id) }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    @endif
                  </form>
              </div>

            </div>
          </div>
          {{-- <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
              <form method="post" class="needs-validation" novalidate="">
                <div class="card-header">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-6 col-12">
                        <label>First Name</label>
                        <input type="text" class="form-control" value="Ujang" required="">
                        <div class="invalid-feedback">
                          Please fill in the first name
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-12">
                        <label>Last Name</label>
                        <input type="text" class="form-control" value="Maman" required="">
                        <div class="invalid-feedback">
                          Please fill in the last name
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-7 col-12">
                        <label>Email</label>
                        <input type="email" class="form-control" value="ujang@maman.com" required="">
                        <div class="invalid-feedback">
                          Please fill in the email
                        </div>
                      </div>
                      <div class="form-group col-md-5 col-12">
                        <label>Phone</label>
                        <input type="tel" class="form-control" value="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12">
                        <label>Bio</label>
                        <textarea class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group mb-0 col-12">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                          <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                          <div class="text-muted form-text">
                            You will get new information about products, offers and promotions
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>
          </div> --}}
        </div>
      </div>
</section>
</div>
@endsection
