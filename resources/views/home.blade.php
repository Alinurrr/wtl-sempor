@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

        </div>

        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
              Link Panduan
            </a>
            <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">Halaman Admin WTL</a>
            <a target="_blank" class="list-group-item list-group-item-action" href="https://laravel.com/docs/7.x#">Docs Lara 7*</a>
            <a target="_blank" class="list-group-item list-group-item-action" href="https://demo.getstisla.com/index-0.html">Demo Stisla</a>
            <a target="_blank" class="list-group-item list-group-item-action" href="https://github.com/realrashid/sweet-alert">Sweetalert2</a>
          </div>
    </div>
</div>
@endsection
