@extends('layouts.auths._auth')

@section('content')
<div class="mb-20">
    <h3>{{ __('Masuk') }}</h3>
</div>
@include('components.alerts.alert-danger')
@include('components.alerts.alert-message')
@include('components.alerts.alert-success')
<form class="form" method="POST">
    @csrf
    <div class="form-group mb-5">
        <input class="form-control h-auto form-control-solid py-4 px-8 @error('username') is-invalid @enderror"
            type="text" placeholder="Nama Pengguna" name="username" autocomplete="username" autofocus />
        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group mb-5">
        <input class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror"
            type="password" placeholder="Kata Sandi" name="password" autocomplete="current-password" />
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
        <div class="checkbox-inline">
            <label class="checkbox m-0 text-muted">
                <input type="checkbox" name="remember" />
                <span></span>Ingat saya</label>
        </div>
        <a href="{{route('password.request')}}" id="kt_login_forgot" class="text-muted text-hover-primary">Lupa Kata
            Sandi ?</a>
    </div>
    <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4" type="submit">Masuk</button>
</form>
@if ($data['amount'] != null)
<div class="mt-10 row d-flex justify-content-center">
    <span class="opacity-70 mt-3">Belum memiliki akun?</span>
    <form action="{{ route('register') }}" method="get">
        <button type="submit" class="text-muted text-hover-primary font-weight-bold btn">Daftar
            <span></span>
        </button>
        @csrf
        <input type="hidden" class="form-control mb-2" name="amount"
            value="{{ $data['amount'] }}">
        <input type="hidden" class="form-control mb-2" name="tenor"
            value="{{ $data['tenor'] }}">
        <input type="hidden" class="form-control mb-2" name="type_tenor"
            value="{{ $data['type_tenor'] }}">
        <input type="hidden" class="form-control mb-2" name="city" value="{{ $data['city'] }}">
        <input type="hidden" name="id_transaction" value="{{ $data['id'] }}">
    </form>
</div>
@else
<div class="mt-5">
    <span class="opacity-70">Belum memiliki akun?</span>
    <a href="{{ route('register') }}" class="text-muted text-hover-primary font-weight-bold">Daftar</a>
</div>
@endif
@endsection
