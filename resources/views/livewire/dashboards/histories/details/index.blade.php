<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!-- begin::Card-->
            <div class="card card-custom overflow-hidden">
                <div class="card-body p-0">
                    <!-- begin: Invoice-->
                    <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                        <div class="col-md-9">
                            <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                                <div class="d-flex flex-column mb-10 mb-md-0">
                                    <div class="font-weight-bolder font-size-lg mb-3">Detail Transaksi</div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="mr-15 font-weight-bold">Nama Lengkap</span>
                                        <span class="text-right">{{ $personals->name }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="mr-15 font-weight-bold">Email</span>
                                        <span class="text-right">{{ $personals->email }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="mr-15 font-weight-bold">Account Number</span>
                                        <span class="text-right">1234567890934</span>
                                    </div>
                                </div>
                                <div class="d-flex flex-column text-md-left">
                                    <span class="font-size-lg font-weight-bolder mb-1">Jumlah Pinjaman</span>
                                    <span class="font-size-h3 font-weight-boldest text-danger mb-1">Rp.
                                        {{ number_format( $detail->credit_amount , 0, ',','.') }}</span>
                                    <span class="font-size-lg font-weight-bolder mb-1">Jangka Waktu</span>
                                    <span class="font-size-h3 font-weight-boldest text-danger mb-1">{{ $detail->tenor }}
                                        {{ $detail->type_tenor }} </span>
                                    {!! $detail == 'Approved' ? '<span
                                        class="label label-lg font-weight-bold label-light-primary label-inline">'.$detail->status.'</span>'
                                    : '<span
                                        class="label label-lg font-weight-bold label-light-primary label-inline">'.$detail->status.'</span>'
                                    !!}
                                </div>
                            </div>
                            <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg mt-5">
                                @if ($detail->collateral_transaksi->type == 'no_collateral')
                                <div class="d-flex flex-column mb-10 mb-md-0">
                                    <div class="font-weight-bolder font-size-lg mb-3">Agunan</div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Jenis Agunan</span>
                                        <span class="text-right">Tidak Agunan</span>
                                    </div>
                                </div>
                                @elseif ($detail->collateral_transaksi->type == 'shm')
                                <div class="d-flex flex-column mb-10 mb-md-0">
                                    <div class="font-weight-bolder font-size-lg mb-3">Agunan</div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-15 font-weight-bold">Jenis Agunan</span>
                                        <span class="text-right">SHM/Letter C</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-15 font-weight-bold">Nomor Sertifikat/Letter C</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->land_certificate_number }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-15 font-weight-bold">Luas (Dalam m2)</span>
                                        <span class="text-right">{{ $detail->collateral_transaksi->land_size }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-15 font-weight-bold">Atas Nama</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->land_owner_name }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-15 font-weight-bold">Nomor Telepon</span>
                                        <span class="text-right">{{ $detail->collateral_transaksi->land_phone }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-15 font-weight-bold">Lokasi</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->land_address }}</span>
                                    </div>
                                </div>
                                @elseif ($detail->collateral_transaksi->type == 'decree_empolyee')
                                <div class="d-flex flex-column mb-10 mb-md-0">
                                        <div class="font-weight-bolder font-size-lg mb-3">Agunan</div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="mr-25 font-weight-bold">Jenis Agunan</span>
                                            <span class="text-right">SK Karyawan</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="mr-25 font-weight-bold">Nomor SK/span>
                                            <span
                                                class="text-right">{{ $detail->collateral_transaksi->employee_certificate_number }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="mr-25 font-weight-bold">Nama Instansi</span>
                                            <span class="text-right">{{ $detail->collateral_transaksi->employee_office }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="mr-25 font-weight-bold">Atas Nama</span>
                                            <span
                                                class="text-right">{{ $detail->collateral_transaksi->employee_owner_name }}</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="mr-25 font-weight-bold">Tahun</span>
                                            <span class="text-right">{{ $detail->collateral_transaksi->employee_year }}</span>
                                        </div>
                                    </div>
                                @elseif ($detail->collateral_transaksi->type == 'bpkb_vehicle')
                                <div class="d-flex flex-column mb-10 mb-md-0">
                                    <div class="font-weight-bolder font-size-lg mb-3">Agunan</div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Jenis Agunan</span>
                                        <span class="text-right">BPKB Kendaraan</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Jenis Kendaraan</span>
                                        @if ($detail->collateral_transaksi->vehicle_type == 'motor')
                                        <div>Sepeda Motor</div>
                                        @elseif ($detail->collateral_transaksi->vehicle_type == 'car')
                                        <div>Mobil</div>
                                        @elseif ($detail->collateral_transaksi->vehicle_type == 'truck')
                                        <div>Truk/Bis</div>
                                        @elseif ($detail->collateral_transaksi->vehicle_type == 'other')
                                        <div>Lain -Lain</div>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Nomor BPKB</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->vehicle_bpkb }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Nomor STNK</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->vehicle_stnk }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Atas Nama</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->vehicle_owner_name }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Nomor Motor</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->vehicle_number }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Merek</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->vehicle_brand }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="mr-25 font-weight-bold">Tahun Kendaraan</span>
                                        <span
                                            class="text-right">{{ $detail->collateral_transaksi->vehicle_year }}</span>
                                    </div>
                                </div>
                                @endif
                                @if ($detail->collateral_transaksi->image)
                                <div class="d-flex justify-content-center flex-column text-md-center">
                                    <span class="font-size-lg font-weight-bolder mb-1">Foto Agunan</span>
                                    <div class="image-input image-input-outline">
                                        <div class="image-input-wrapper mb-2"
                                            style="background-image: url({{ '../storage/media/user/'.$detail->collateral_transaksi->image }})">
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- begin: Invoice body-->
                    <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center font-weight-bold text-muted text-uppercase">Angsuran
                                                ke-</th>
                                            <th class="text-center font-weight-bold text-muted text-uppercase">Pokok
                                            </th>
                                            <th class="text-center font-weight-bold text-muted text-uppercase">Bunga
                                            </th>
                                            <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total
                                            </th>
                                            {{-- <th class="text-right font-weight-bold text-muted text-uppercase">Status</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaction_data['data'] as $data)
                                        <tr class="font-weight-boldest font-size-lg">
                                            <td class="text-center pt-7">{{ $data['id'] }}</td>
                                            <td class="text-center pt-7">
                                                Rp.{{ number_format($data['principal'],0,',','.') }}</td>
                                            <td class="text-center pt-7">
                                                Rp.{{ number_format($data['interest'],0,',','.') }}</td>
                                            <td class="text-danger pr-0 pt-7 text-right">
                                                Rp.{{ number_format(($data['principal']+ $data['interest']),0,',','.') }}
                                            </td>
                                            {{-- <td class="text-danger pr-0 pt-7 text-right">Lunas</td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end: Invoice body-->
                    <!-- end: Invoice-->
                </div>
            </div>
            <!-- end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
