@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Ini Halaman Edit Level user</h1>
    </div>

    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
                <form action="/adm/user/{{$user->id}}/editlevel" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-header">
                  <h4>Nama : {{$user->name}}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="form-group ml-3 col-md-8 col-12">
                        <label>Role</label>
                        <select name="level" class="form-control">
                        @if (auth()->user()->level=="master")
                        <option value="master" {{$user->level == 'master' ? 'selected' : ''}}>Master</option>
                        @endif
                          <option value="admin" {{$user->level == 'admin' ? 'selected' : ''}}>Admin</option>
                          <option value="user" {{$user->level == 'user' ? 'selected' : ''}}>User</option>
                        </select>
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
