@extends('layouts.landingpages._master')
@section('content')
<section class="info-pinjaman bg-top ptb-50">
    <div class="container">
        <div class="solution-item-product">
            <h3 class="color-label">{{now()->isoFormat('dddd, D MMMM Y')}}</h3>
            <div class="rate-form">
                <div class="row align-items-center">
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-6">Jumlah
                                    Pinjaman</label>
                                <label for="colFormLabelSm" class="col-sm-6">:
                                    Rp.
                                    {{ number_format($transaction_data['data']['loan']['amount'],0,',','.') }}</label>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabel" class="col-sm-6 ">Waktu Pinjaman</label>
                                <label for="colFormLabelSm" class="col-sm-6">:
                                    {{$transaction_data['data']['loan']['tenor']}}
                                    {{ $data['type_tenor'] }}</label>
                            </div>
                            <div class="row">
                                <label for="colFormLabel" class="col-sm-6 ">Kota / Kabupaten</label>
                                <label for="colFormLabelSm" class="col-sm-6">: {{ $data['city'] }}</label>
                            </div>
                            <div class="rate-btn">
                                <button type="button" class="default-btn" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Ganti
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
</section>

@foreach ($transaction_data['data']['product'] as $product )
<div class="container ptb-25">
    <h4></h4>
    <section class="solution-area">
        <div class="container">
            <div class="solution-item">
                <div class="row d-flex d-flex justify-content-around">
                    <div class="col-lg-2 text-center">
                        <img class="text-center" src="{{asset('landingpage/img/loan.png')}}" alt="image" style="width:50px; height:50px;">
                        <h5>{{ $product['product']['name'] }}</h5>
                    </div>
                    @if ($product['product']['product_loan']['collateral'] == 'true')
                    <div class="col-lg-2 text-center">
                        <h4>Dengan Agunan</h4>
                    </div>
                    @else
                    <div class="col-lg-2 text-center">
                        <h4>Tanpa Agunan</h4>
                    </div>
                    @endif
                    <div class="col-lg-2 text-center">
                        <h5>Bunga</h5>
                        <span>{{ number_format( $product['product']['product_loan']['interest_rates'],1) }}%</span>
                        <form action="{{ route('detail-produk', $product['product']['id']) }}" method="get">
                            <button type="submit" class="btn btn-outline-custom text-center">Lihat Detail
                                <span></span>
                            </button>
                            @csrf
                            <input type="hidden" class="form-control mb-2" name="amount"
                                value="{{ $transaction_data['data']['loan']['amount'] }}">
                            <input type="hidden" class="form-control mb-2" name="tenor"
                                value="{{ $transaction_data['data']['loan']['tenor'] }}">
                            <input type="hidden" class="form-control mb-2" name="type_tenor"
                                value="{{ $data['type_tenor'] }}">
                            <input type="hidden" class="form-control mb-2" name="city" value="{{ $data['city'] }}">
                            <input type="hidden" name="id_transaction" value="{{ $product['product']['id'] }}">
                        </form>
                    </div>
                    <div class="col-lg-2 text-center">
                        <h5>Cicilan
                            per{{ $product['product']['product_loan']['installment_type'] == 'MONTHLY' ? 'minggu' : 'bulan'}}

                        </h5>
                        <span>Rp. {{ number_format($product['installment'],0,',','.') }}</span>
                    </div>
                    @guest
                    @if (Route::has('login'))
                    <div class="col-lg-2 text-center">
                        <div class="button">
                            <form action="{{ route('login') }}" method="get">
                                <button type="submit" class="default-btn">Ajukan Sekarang
                                    <span></span>
                                </button>
                                @csrf
                                <input type="hidden" class="form-control mb-2" name="amount"
                                    value="{{ $transaction_data['data']['loan']['amount'] }}">
                                <input type="hidden" class="form-control mb-2" name="tenor"
                                    value="{{ $transaction_data['data']['loan']['tenor'] }}">
                                <input type="hidden" class="form-control mb-2" name="type_tenor"
                                    value="{{ $data['type_tenor'] }}">
                                <input type="hidden" class="form-control mb-2" name="city" value="{{ $data['city'] }}">
                                <input type="hidden" name="id_transaction" value="{{ $product['product']['id'] }}">
                            </form>
                        </div>
                    </div>
                    @endif
                    @else
                    <div class="col-lg-2 text-center">
                        <div class="button">
                            <form action="{{ route('process-transaction') }}" method="get">
                                <button type="submit" class="default-btn">Ajukan Sekarang
                                    <span></span>
                                </button>
                                @csrf
                                <input type="hidden" class="form-control mb-2" name="amount"
                                    value="{{ $transaction_data['data']['loan']['amount'] }}">
                                <input type="hidden" class="form-control mb-2" name="tenor"
                                    value="{{ $transaction_data['data']['loan']['tenor'] }}">
                                <input type="hidden" class="form-control mb-2" name="type_tenor"
                                    value="{{ $data['type_tenor'] }}">
                                <input type="hidden" class="form-control mb-2" name="city" value="{{ $data['city'] }}">
                                <input type="hidden" name="id_transaction" value="{{ $product['product']['id'] }}">
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>
</div>
@endforeach

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ganti Pinjaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('product')}}" method="get">
                    @csrf
                    <div class="form-group">
                        <label>Jumlah Pinjaman</label>
                        <input type="number" class="form-control mb-2" placeholder="Rp. 5.000.000" name="amount"
                            value="{{ $transaction_data['data']['loan']['amount'] }}">
                    </div>
                    <div class="row align-items-start">
                        <div class="col-lg-6">
                            <label for="jenis bayar">Waktu Pinjaman</label>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-check form-check-inline ms-2">
                                <input class="form-check-input" type="radio" name="type_tenor" id="jenis_minggu"
                                    value="Minggu" {{ $data['type_tenor'] == 'Minggu'? 'checked' : ''}}>
                                <label class="form-check-label" for="jenis_minggu">Mingguan</label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type_tenor" id="jenis_bulan"
                                    value="Bulan" {{ $data['type_tenor'] == 'Bulan'? 'checked' : ''}}>
                                <label class="form-check-label" for="jenis_bulan">Bulanan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Pinjaman"
                            value="{{ $transaction_data['data']['loan']['tenor'] }}" name="tenor">
                    </div>

                    <div class="form-group">
                        <label>Kabupaten / Kota </label>
                        <div class="select-box">
                            <select class="form-control" name="city">
                                <option value="Banyumas" {{ $data['city'] == 'Banyumas'? 'selected' : ''}}>Banyumas
                                </option>
                                <option value="Pekalongan" {{ $data['city'] == 'Pekalongan'? 'selected' : ''}}>
                                    Pekalongan</option>
                                <option value="Lubuk Linggau" {{ $data['city'] == 'Lubuk Linggau'? 'selected' : ''}}>
                                    Lubuk Linggau</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Ganti</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop
