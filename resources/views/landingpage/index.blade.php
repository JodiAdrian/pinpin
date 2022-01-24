@extends('layouts.landingpages._master')

@section('content')
{{-- <div class="main-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container-fluid">
                <div class="main-banner-content">
                    <span>Kami disini untuk membantu </span>
                    <h1>Mulai dan kembangkan bisnis anda sendiri</h1>
                    <p> melakukan peminjaman dengan keuntungan - keuntungan yang ada dan kami percaya kepada anda
                        yang akan berbuat lebih banyak.</p>
                    <div class="banner-btn">
                        <a href="#pinjaman" class="default-btn" data-bs-target="#pinjaman">
                            Ajukan Pinjaman Sekarang!
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="banner-social-buttons">
                    <ul>
                        <li>
                            <span>Ikuti kami</span>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="flaticon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="flaticon-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="flaticon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="flaticon-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="approvals-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="approvals-content">
                        <div class="icon">
                            <i class="flaticon-loan"></i>
                        </div>
                        <span>Cepat</span>
                        <p>Persetujuan pinjaman</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="approvals-content">
                        <div class="icon">
                            <i class="flaticon-satisfaction"></i>
                        </div>
                        <span>20,000</span>
                        <p>Kepuasan Pelanggan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="approvals-content">
                        <div class="icon">
                            <i class="flaticon-document"></i>
                        </div>
                        <span>Tidak ada pembayaran di muka atau</span>
                        <p>biaya tersembunyi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="pinjaman" class="inquiry-area ptb-100 pt-3">
    <form action="{{route('product')}}" method="get">
        @csrf
        <div class="banner-3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="inquiry-content">
                        <h1 class="color-label ms-2">Mulai Ajukan Pinjaman Online Anda!</h3>
                    </div>
                </div>
                <div class="col-lg-5 mb-5 ">
                    <div class="rate-form">
                        <div class="row">
                            <div class="rate-content">
                                <span>Ayo hitung pinjaman anda!</span>
                                <h3>Berapa yang kamu butuhkan?</h3>
                            </div>
                            <div class="row">
                                <div class="form-group ms-2">
                                    <label>Jumlah pinjaman</label>
                                    <input type="text" id="rupiah" class="form-control mb-2"
                                        placeholder="Rp. 5.000.000" name="amount">
                                    <input type="range" class="form-range" min="200000" value="5000000" max="10000000"
                                        step="100000" id="myRange" name="amount">
                                    <div class="row align-items-start">
                                        <div class="col-lg-6">
                                            <label for="jenis bayar">Waktu Pinjaman</label>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-check form-check-inline ms-2">
                                                <input class="form-check-input" type="radio" name="type_tenor"
                                                    id="jenis_minggu" value="Minggu">
                                                <label class="form-check-label" for="jenis_minggu">Mingguan</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="type_tenor"
                                                    id="jenis_bulan" value="Bulan">
                                                <label class="form-check-label" for="jenis_bulan">Bulanan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="tenor"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="Masukkan Waktu ">
                                        @error('title')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Kota / Kabupaten</label>
                                        <div class="select-box">
                                            <select class="form-control" name="city">
                                                <option value="Banyumas">Banyumas</option>
                                                <option value="Pekalongan">Pekalongan</option>
                                                <option value="Lubuk Linggau">Lubuk Linggau</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="rate-btn ms-2 mb-2 mr-3">
                                        <button type="submit" class="default-btn">
                                            Ajukan pinjaman sekarang
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<section id="langkah-pinjaman" class="process-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Langkah Pengajuan Pinjaman</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="process-item">
                    <div class="icon">
                        <i class="flaticon-approval"></i>
                    </div>
                    <h3>1. Pendaftaran</h3>

                    <label for=""></label>
                    <p>Tentukan jumlah dan lama pinjaman kamu</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-item">
                    <div class="icon">
                        <i class="flaticon-transparency"></i>
                    </div>
                    <h3>2. Pilih Pinjaman</h3>
                    <p>Pilih produk pinjaman yang sudah tersedia</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-item">
                    <div class="icon">
                        <i class="flaticon-reliability"></i>
                    </div>
                    <h3>3. Tunggu Persetujuan</h3>
                    <p>Isi kelengkapan data diri kamu, dan tunggu persetujuan dari pihak bank</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="process-item">
                    <div class="icon">
                        <i class="flaticon-personal"></i>
                    </div>
                    <h3>4. Terima Dana </h3>
                    <p>Dana sudah bisa diterima oleh kamu!</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="company-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <div class="company-image">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="company-content">
                    <h3>Mengapa memilih kami?</h3>
                    <div class="company-text">
                        <div class="icon">
                            <i class="flaticon-transparency"></i>
                        </div>
                        <h4>Aman dan Transaparan</h4>
                        <p>Cukup dengan KTP tidak perlu NPWP dan kartu kredit, disertakan hasil persetujuan pinjaman
                            yang cepat untuk anda</p>
                    </div>
                    <div class="company-text">
                        <div class="icon">
                            <i class="flaticon-talent"></i>
                        </div>
                        <h4>Pengajuan yang Praktis</h4>
                        <p>Cukup dengan KTPm tidak perlu NPWP dan kartu kredit, disertakan hasil persetujuan
                            pinjaman
                            yang cepat untuk anda</p>
                    </div>
                    <div class="company-text">
                        <div class="icon">
                            <i class="flaticon-key"></i>
                        </div>
                        <h4>Penawaran Terbaik</h4>
                        <p>Kami menyediakan penawaran produk pinjaman terbaik, dari bungan paling rendah hingga
                            tertinggi</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</section>

<section class="partner-area pt-100 pb-70">
    <div class="section-title">
        <h2>Mitra Kami</h2>
    </div>
    <div class="partner-area ptb-100">
        <div class="container">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <img src="{{ asset('landingpage/img/partner/bni.png') }}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('landingpage/img/partner/bca.png') }}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('landingpage/img/partner/bri.png') }}" alt="image">
                </div>
                <div class="partner-item">
                    <img src="{{ asset('landingpage/img/partner/mandiri.png') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
    </div>
</section> --}}

<div class="main-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="main-banner-content">
                        <span>Kami disini untuk membantu </span>
                        <h1>Mulai dan kembangkan bisnis anda sendiri</h1>
                        <p> melakukan peminjaman dengan keuntungan - keuntungan yang ada dan kami percaya kepada anda
                            yang akan berbuat lebih banyak.</p>
                        <div class="banner-btn">
                            <a href="#pinjaman" class="default-btn" data-bs-target="#pinjaman">
                                Ajukan Pinjaman Sekarang!
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="banner-social-buttons">
                        <ul>
                            <li>
                                <span>Ikuti kami</span>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="flaticon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="flaticon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="flaticon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="flaticon-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="approvals-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="approvals-content">
                            <div class="icon">
                                <i class="flaticon-loan"></i>
                            </div>
                            <span>Cepat</span>
                            <p>Persetujuan pinjaman</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="approvals-content">
                            <div class="icon">
                                <i class="flaticon-satisfaction"></i>
                            </div>
                            <span>Kepuasan</span>
                            <p>Pelanggan</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="approvals-content">
                            <div class="icon">
                                <i class="flaticon-document"></i>
                            </div>
                            <span>Tidak ada pembayaran di muka atau</span>
                            <p>biaya tersembunyi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="pinjaman" class="deserve-area pb-90">
            <div class="banner-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="deserve-item">
                                <h3 class="text-white">Mulai Ajukan Pinjaman Online Anda !</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="{{route('product')}}" method="get">
                                @csrf
                                <div class="rate-form">
                                    <div class="row">
                                        <div class="rate-content">
                                            <span>Ayo hitung pinjaman anda!</span>
                                            <h3>Berapa yang kamu butuhkan?</h3>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ms-2">
                                                <label>Jumlah pinjaman</label>
                                                <input type="text" id="rupiah" class="form-control mb-2"
                                                    placeholder="Rp. 5.000.000" name="amount">
                                                <input type="range" class="form-range" min="200000" value="5000000"
                                                    max="10000000" step="100000" id="myRange" name="amount">
                                                <div class="row align-items-start">
                                                    <div class="col-lg-6">
                                                        <label for="jenis bayar">Waktu Pinjaman</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="type_tenor"
                                                                id="jenis_minggu" value="Minggu">
                                                            <label class="form-check-label" for="jenis_minggu">Mingguan</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="type_tenor"
                                                                id="jenis_bulan" value="Bulan">
                                                            <label class="form-check-label" for="jenis_bulan">Bulanan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="tenor"
                                                        class="form-control @error('tenor') is-invalid @enderror"
                                                        placeholder="Masukkan Waktu ">
                                                    @error('tenor')
                                                    <span class="invalid-feedback">
                                                        {{ $message }}
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Kota / Kabupaten</label>
                                                    <div class="select-box">
                                                        <select class="form-control" name="city">
                                                            <option value="Banyumas">Banyumas</option>
                                                            <option value="Pekalongan">Pekalongan</option>
                                                            <option value="Lubuk Linggau">Lubuk Linggau</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="rate-btn ms-2 mb-2 mr-3">
                                                    <button type="submit" class="default-btn">
                                                        Ajukan pinjaman sekarang
                                                        <span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="langkah-pinjaman" class="process-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Langkah Pengajuan Pinjaman</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process-item">
                        <div class="icon">
                            <i class="flaticon-approval"></i>
                        </div>
                        <h3>1. Pendaftaran</h3>

                        <label for=""></label>
                        <p>Tentukan jumlah dan lama pinjaman kamu</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-item">
                        <div class="icon">
                            <i class="flaticon-transparency"></i>
                        </div>
                        <h3>2. Pilih Pinjaman</h3>
                        <p>Pilih produk pinjaman yang sudah tersedia</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-item">
                        <div class="icon">
                            <i class="flaticon-reliability"></i>
                        </div>
                        <h3>3. Tunggu Persetujuan</h3>
                        <p>Isi kelengkapan data diri kamu, dan tunggu persetujuan dari pihak bank</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="process-item">
                        <div class="icon">
                            <i class="flaticon-personal"></i>
                        </div>
                        <h3>4. Terima Dana </h3>
                        <p>Dana sudah bisa diterima oleh kamu!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="company-image">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="company-content">
                        <h3>Mengapa memilih kami?</h3>
                        <div class="company-text">
                            <div class="icon">
                                <i class="flaticon-transparency"></i>
                            </div>
                            <h4>Aman dan Transaparan</h4>
                            <p>Cukup dengan KTP tidak perlu NPWP dan kartu kredit, disertakan hasil persetujuan pinjaman
                                yang cepat untuk anda</p>
                        </div>
                        <div class="company-text">
                            <div class="icon">
                                <i class="flaticon-talent"></i>
                            </div>
                            <h4>Pengajuan yang Praktis</h4>
                            <p>Cukup dengan KTPm tidak perlu NPWP dan kartu kredit, disertakan hasil persetujuan
                                pinjaman
                                yang cepat untuk anda</p>
                        </div>
                        <div class="company-text">
                            <div class="icon">
                                <i class="flaticon-key"></i>
                            </div>
                            <h4>Penawaran Terbaik</h4>
                            <p>Kami menyediakan penawaran produk pinjaman terbaik, dari bungan paling rendah hingga
                                tertinggi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </section>


    <section class="partner-area pt-100 pb-70">
        <div class="section-title">
            <h2>Mitra Kami</h2>
        </div>
        <div class="partner-area ptb-100">
            <div class="container">
                <div class="partner-slider owl-carousel owl-theme">
                    <div class="partner-item">
                        <img src="{{ asset('landingpage/img/partner/bni.png') }}" alt="image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('landingpage/img/partner/bca.png') }}" alt="image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('landingpage/img/partner/bri.png') }}" alt="image">
                    </div>
                    <div class="partner-item">
                        <img src="{{ asset('landingpage/img/partner/mandiri.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
