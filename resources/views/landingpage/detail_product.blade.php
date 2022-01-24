@extends('layouts.landingpages._master')
@section('content')
<div class="container">
    <h4>Anuitas</h4>
    <section class="solution-area">
        <div class="container">
            <div class="solution-item">
                <div class="row d-flex d-flex justify-content-around">
                    <div class="col-lg-2 text-center">
                        <img class="text-center" src="{{asset('landingpage/img/loan.png')}}" alt="image" style="width:50px; height:50px;">
                    </div>
                    @if ($transaction_data['data']['product_loan']['collateral'] == 'true')
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
                        <span>{{ number_format( $transaction_data['data']['product_loan']['interest_rates'],1) }}%</span>
                    </div>
                    <div class="col-lg-2 text-center">
                        <h5>Cicilan
                            per{{ $transaction_data['data']['product_loan']['installment_type'] == 'MONTHLY' ? 'minggu' : 'bulan'}}
                        </h5>
                        {{-- <span>Rp. {{ number_format($installment_data['data']['principal']+$installment_data['data']['interest'],0,',','.') }}</span>
                        --}}
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
                                    value="{{ $data['amount'] }}">
                                <input type="hidden" class="form-control mb-2" name="tenor"
                                    value="{{ $data['tenor'] }}">
                                <input type="hidden" class="form-control mb-2" name="type_tenor"
                                    value="{{ $data['type_tenor'] }}">
                                <input type="hidden" class="form-control mb-2" name="city" value="{{ $data['city'] }}">
                                <input type="hidden" name="id_transaction" value="{{ $data['id'] }}">
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
                                    value="{{ $data['amount'] }}">
                                <input type="hidden" class="form-control mb-2" name="tenor"
                                    value="{{ $data['tenor'] }}">
                                <input type="hidden" class="form-control mb-2" name="type_tenor"
                                    value="{{ $data['type_tenor'] }}">
                                <input type="hidden" class="form-control mb-2" name="city" value="{{ $data['city'] }}">
                                <input type="hidden" name="id_transaction" value="{{ $data['id'] }}">
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container p-5">
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
        <table class="table mb-0 text-center">
            <thead>
                <tr>
                    <th>Angsuran ke-</th>
                    <th>Cicilan Pokok</th>
                    <th>Cicilan Bunga</th>
                    <th>Total Angsuran</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($installment_data['data'] as $i)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>Rp. {{ number_format($i['principal'],0,',','.') }}</td>
                    <td>Rp. {{ number_format($i['interest'],0,',','.') }}</td>
                    <td>Rp. {{ number_format($i['principal']+$i['interest'],0,',','.') }}</td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>

    </div>
</div>
@stop
