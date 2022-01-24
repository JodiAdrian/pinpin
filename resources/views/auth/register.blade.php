@extends('layouts.auths._auth')

@section('content')
<div class="mb-10">
    <h3>{{ __('Daftar') }}</h3>
    {{-- <div class="text-muted font-weight-bold">Enter your details to login to your account:</div> --}}
</div>
<form class="form" method="POST">
    @csrf
    <div class="form-group mb-5">
        <input class="form-control h-auto form-control-solid py-4 px-8 @error('name') is-invalid @enderror" type="text"
            placeholder="Nama Lengkap" name="name" autocomplete="name" value="{{ old('name') }}" autofocus />
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group mb-5">
        <input class="form-control h-auto form-control-solid py-4 px-8 @error('username') is-invalid @enderror"
            type="text" placeholder="Nama Pengguna" name="username" value="{{ old('username') }}"
            autocomplete="username" />
        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group mb-5">
        <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror"
            type="email" placeholder="Email" name="email" autocomplete="email" value="{{ old('email') }}" />
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group mb-5">
        <input class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror"
            type="password" placeholder="Kata Sandi" name="password" autocomplete="new-password" />
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group mb-5">
        <input class="form-control h-auto form-control-solid py-4 px-8" type="password"
        placeholder="Konfirmasi Kata Sandi" name="password_confirmation" autocomplete="new-password" />
    </div>
    @if ($data['amount'] != null)
    <div class="row d-flex justify-content-center">
            <a href="{{route('login')}}" class="btn btn-light-danger font-weight-bold px-9 py-4 my-3 mx-4">Batal</a>
        <form action="{{ route('process-transaction') }}" method="get">
                <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Daftar
                    <span></span>
                </button>
                @csrf
                <input type="hidden" name="amount" value="{{ $data['amount'] }}">
                <input type="hidden" name="tenor" value="{{ $data['tenor'] }}">
                <input type="hidden" name="type_tenor" value="{{ $data['type_tenor'] }}">
                <input type="hidden" name="city" value="{{ $data['city'] }}">
                <input type="hidden" name="id_transaction" value="{{ $data['id'] }}">
            </form>
    </div>
    @else
    <a href="{{route('login')}}" class="btn btn-light-danger font-weight-bold px-9 py-4 my-3 mx-4">Batal</a>
    <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4" type="submit">Daftar</button>
    @endif
    
</form>
@json($data)
@endsection
