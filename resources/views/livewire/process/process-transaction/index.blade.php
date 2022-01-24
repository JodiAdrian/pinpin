<div class="content d-flex flex-column flex-column-fluid">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Proses Transaksi</h2>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom">
                <div class="card-body p-5">
                    <form wire:submit.prevent="confirmTransaction({{ $_id }}, 'confirm')" enctype="multipart/form-data">
                        <div class="row p-2 p-md-10">
                            <div class="col-md col-sm-12 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="text-center d-flex flex-row flex-md-column align-items-center">
                                        <i class="flaticon-users text-primary icon-wizard"></i>
                                        <div class="d-block d-xs-block d-md-none pl-2">&nbsp;</div>
                                        <h5 class="text-primary mb-0">Biodata Diri</h3>
                                    </div>

                                    <span class="svg-icon svg-icon-xl svg-icon-primary ml-auto mr-5">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                    x="11" y="5" width="2" height="14" rx="1" />
                                                <path
                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md col-sm-12 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="text-center d-flex flex-row flex-md-column align-items-center">
                                        <i
                                            class="flaticon-placeholder-2 {{ $section !=  'biodata' ? 'text-primary' : 'text-muted' }} icon-wizard"></i>
                                        <div class="d-block d-xs-block d-md-none pl-2">&nbsp;</div>
                                        <h5 class="{{ $section != 'biodata' ? 'text-primary' : 'text-muted' }} mb-0">
                                            Alamat Rumah</h3>
                                    </div>

                                    <span
                                        class="svg-icon svg-icon-xl {{ $section != 'biodata' ? 'svg-icon-primary ' : 'svg-icon-muted' }} ml-auto mr-5">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                    x="11" y="5" width="2" height="14" rx="1" />
                                                <path
                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md col-sm-12 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="text-center d-flex flex-row flex-md-column align-items-center">
                                        <i
                                            class="flaticon-laptop {{ $section !=  'biodata' && $section != 'address' ? 'text-primary' : 'text-muted' }} icon-wizard"></i>
                                        <div class="d-block d-xs-block d-md-none pl-2">&nbsp;</div>
                                        <h5
                                            class="{{ $section != 'biodata' && $section != 'address' ? 'text-primary' : 'text-muted' }} mb-0">
                                            Pekerjaan</h3>
                                    </div>

                                    <span
                                        class="svg-icon svg-icon-xl {{ $section != 'biodata' && $section != 'address' ? 'svg-icon-primary ' : 'svg-icon-muted' }} ml-auto mr-5">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                    x="11" y="5" width="2" height="14" rx="1" />
                                                <path
                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md col-sm-12 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="text-center d-flex flex-row flex-md-column align-items-center">
                                        <i
                                            class="flaticon-notepad {{ $section !=  'biodata' && $section != 'address' && $section != 'occupation' ? 'text-primary' : 'text-muted' }} icon-wizard"></i>
                                        <div class="d-block d-xs-block d-md-none pl-2">&nbsp;</div>
                                        <h5
                                            class="{{ $section != 'biodata' && $section != 'address' && $section != 'occupation' ? 'text-primary' : 'text-muted' }} mb-0">
                                            Agunan</h3>
                                    </div>

                                    <span
                                        class="svg-icon svg-icon-xl {{ $section != 'biodata' && $section != 'address' && $section != 'occupation' ? 'svg-icon-primary ' : 'svg-icon-muted' }} ml-auto mr-5">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                    x="11" y="5" width="2" height="14" rx="1" />
                                                <path
                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md col-sm-12 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="text-center d-flex flex-row flex-md-column align-items-center">
                                        <i
                                            class="flaticon2-notepad {{ $section == 'confirm' ? 'text-primary' : 'text-muted' }} icon-wizard"></i>
                                        <div class="d-block d-xs-block d-md-none pl-2">&nbsp;</div>
                                        <h5 class="{{ $section == 'confirm' ? 'text-primary' : 'text-muted' }} mb-0">
                                            Konfirmasi Peminjaman</h3>
                                    </div>

                                    <span
                                        class="svg-icon svg-icon-xl {{ $section == 'confirm' ? 'svg-icon-primary' : 'svg-icon-muted' }} ml-auto mr-5 d-block d-xs-block d-md-none">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3"
                                                    transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                    x="11" y="5" width="2" height="14" rx="1" />
                                                <path
                                                    d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                    fill="#000000" fill-rule="nonzero"
                                                    transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <!--begin::Wizard Step 1-->
                        @if ($section == 'biodata')
                        <div class="pb-5"
                            {{$section == 'biodata' ? 'data-wizard-type=step-content data-wizard-state=current' : 'data-wizard-type=step-content'}}
                            wire:ignore.self>
                            <h3 class="mb-10 font-weight-bold text-dark">Biodata Diri</h3>
                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Nama Lengkap" wire:model='name'
                                            {{ auth()->user()->name ? 'disabled' : '' }} />
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Jenis Kelamin<span class="text-danger">*</span></label>
                                        <div class="radio-inline pt-5">
                                            <label class="radio radio-lg">
                                                <input wire:model="gender" value="Laki - Laki" type="radio"
                                                    {{ auth()->user()->personal ? 'checked disabled' : '' }}>
                                                <span></span>Laki - Laki</label>
                                            <label class="radio radio-lg">
                                                <input wire:model="gender" value="Perempuan" type="radio"
                                                    {{ auth()->user()->personal ? 'checked disabled' : '' }}>
                                                <span></span>Perempuan</label>
                                        </div>
                                        @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Tempat Lahir<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            wire:model="place_of_birth" placeholder="Tempat Lahir"
                                            {{ auth()->user()->personal ? 'disabled' : '' }} />
                                        @error('place_of_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Select-->
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="text-danger">*</span></label>
                                        <input type="date" class="form-control form-control-solid form-control-lg"
                                            wire:model="birth_date" {{ auth()->user()->personal ? 'disabled' : '' }} />
                                        @error('birth_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Select-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label for="exampleSelect1">Agama<span class="text-danger">*</span></label>
                                        <select wire:model="religion"
                                            class="form-control form-control-solid form-control-lg" id="exampleSelect1">
                                            <option value="">-- Pilih --</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Kristen Katholik">Kristen Katholik</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Atheis">Atheis</option>
                                        </select>
                                        @error('religion')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>NIK<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            wire:model="id_number" placeholder="Masukkan NIK"
                                            {{ auth()->user()->personal ? 'disabled' : '' }} />
                                        @error('id_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nomor NPWP<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            wire:model="number_of_tax_registration" placeholder="Masukkan Nomor NPWP"
                                            {{ auth()->user()->personal ? 'disabled' : '' }} />
                                        @error('number_of_tax_registration')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Email" wire:model="email"
                                            value="{{ auth()->user()->email }}"
                                            {{ auth()->user()->personal ? 'disabled' : '' }} />
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Nomor Telepon" wire:model="no_handphone" />
                                        @error('no_handphone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nomor Rekening<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Nomor Rekening" wire:model="account_number" />
                                        @error('account_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between p-5">
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label class="col-xl-6 col-lg-6 col-form-label">Foto NPWP<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            @if($temp_tax_photo == null)
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $temp_tax_photo ?? 'media/users/360x360.png' }})">
                                                </div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah Foto NPWP">
                                                    <i class="fa fa-plus icon-sm text-muted"></i>
                                                    <input type="file" wire:model="tax_photo" />
                                                    <input type="hidden" />
                                                </label>
                                            </div>
                                            <div wire:loading wire:target="tax_photo">Mengunggah...</div>
                                            @error('tax_photo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @else
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $tax_photo ? $temp_tax_photo : 'storage/media/user/'.$temp_tax_photo }})">
                                                </div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Ubah Foto NPWP">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" wire:model="tax_photo" />
                                                    <input type="hidden" />
                                                </label>
                                            </div>
                                            <div wire:loading wire:target="tax_photo">Mengunggah...</div>
                                            @error('tax_photo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label class="col-xl-6 col-lg-6 col-form-label">Foto
                                            KTP<span class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            @if($temp_photo_id == null)
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $temp_photo_id ?? 'media/users/360x360.png' }})">
                                                </div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto KTP">
                                                    <i class="fa fa-plus icon-sm text-muted"></i>
                                                    <input type="file" wire:model="photo_id" />
                                                    <input type="hidden" />
                                                </label>
                                            </div>
                                            <div wire:loading wire:target="_id">Mengunggah...</div>
                                            @error('photo_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @else
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $photo_id ? $temp_photo_id : 'storage/media/user/'.$temp_photo_id }})">
                                                </div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Ubah foto KTP">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" wire:model="photo_id" />
                                                    <input type="hidden" />
                                                </label>
                                            </div>
                                            <div wire:loading wire:target="photo_id">Mengunggah...</div>
                                            @error('photo_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label class="col-xl-9 col-lg-9 col-form-label">Foto Selfie KTP<span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-9 col-xl-6">
                                            @if($temp_selfie == null)
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $temp_selfie ?? 'media/users/360x360.png' }})">
                                                </div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto KTP">
                                                    <i class="fa fa-plus icon-sm text-muted"></i>
                                                    <input type="file" wire:model="selfie_photo" />
                                                    <input type="hidden" />
                                                </label>
                                            </div>
                                            <div wire:loading wire:target="selfie_photo">Mengunggah...</div>
                                            @error('selfie_photo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @else
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $selfie_photo ? $temp_selfie : 'storage/media/user/'.$temp_selfie }})">
                                                </div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Ubah foto KTP">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" wire:model="selfie_photo" />
                                                    <input type="hidden" />
                                                </label>
                                            </div>
                                            <div wire:loading wire:target="selfie_photo">Mengunggah...</div>
                                            @error('selfie_photo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <!--end::Wizard Step 1-->
                        <!--begin::Wizard Step 2-->
                        @if ($section == 'address')
                        <div class="pb-5"
                            {{$section == 'address' ? 'data-wizard-type=step-content data-wizard-state=current' : 'data-wizard-type=step-content'}}
                            wire:ignore.self>
                            <h4 class="mb-10 font-weight-bold text-dark">Alamat</h4>
                            <!--begin::Input-->
                            <div class="form-group">
                                <label>Provinsi<span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid form-control-lg"
                                    wire:model="province_id">
                                    <option>Pilih Provinsi</option>
                                    @foreach ($provinces as $province)
                                    <option value="{{$province->id}}">{{ Str::title($province->name) }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('province_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input-->
                            <!--begin::Input-->
                            <div class="form-group">
                                <label {{ $province_id ? '' : 'hidden'}}>Kota / Kabupaten<span
                                        class="text-danger">*</span></label>
                                <select class="form-control form-control-solid form-control-lg" wire:model="city_id"
                                    {{ $province_id ? '' : 'hidden'}}>
                                    <option>Pilih Kabupaten</option>
                                    @foreach ($cities as $city)
                                    <option value="{{$city->id}}">{{ Str::title($city->name) }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input-->
                            <!--begin::Input-->
                            <div class="form-group">
                                <label {{ $province_id && $city_id ? '' : 'hidden'}}>Kecamatan<span
                                        class="text-danger">*</span></label>
                                <select class="form-control form-control-solid form-control-lg" wire:model="district_id"
                                    {{ $province_id && $city_id ? '' : 'hidden'}}>
                                    <option>Pilih Kecamatan</option>
                                    @foreach ($districts as $district)
                                    <option value="{{$district->id}}">{{ Str::title($district->name) }}</option>
                                    @endforeach
                                </select>
                                @error('district_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input-->
                            <!--begin::Input-->
                            <div class="form-group">
                                <label {{ $province_id && $city_id && $district_id ? '' : 'hidden'}}>Kode Pos<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid form-control-lg"
                                    placeholder="Masukkan Kode Pos" wire:model="postal_code"
                                    {{ $province_id && $city_id && $district_id ? '' : 'hidden'}} />
                                @error('postal_code')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input-->
                            <!--begin::Input-->
                            <div class="form-group">
                                <label
                                    {{ $province_id && $city_id && $district_id && $postal_code ? '' : 'hidden'}}>Alamat
                                    Lengkap<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid form-control-lg"
                                    placeholder="Masukkan Alamat Lengkap" wire:model="address"
                                    {{ $province_id && $city_id && $district_id && $postal_code ? '' : 'hidden'}} />
                                @error('address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Wizard Step 2-->
                        @endif
                        <!--begin::Wizard Step 3-->
                        @if ($section == 'occupation')
                        <div class="pb-5"
                            {{$section == 'occupation' ? 'data-wizard-type=step-content data-wizard-state=current' : 'data-wizard-type=step-content'}}
                            wire:ignore.self>
                            <h4 class="mb-10 font-weight-bold text-dark">Pekerjaan</h4>
                            <!--begin::Select-->
                            <div class="form-group">
                                <label>Pekerjaan<span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-solid form-control-lg"
                                    placeholder="Masukkan Nama Pekerjaan" wire:model="job" />
                                @error('job')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Select-->
                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nama Perusahaan<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Nama Perusahaan" wire:model="place_name" />
                                        @error('place_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label class="col-5 col-form-label">Alamat Perusahaan<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Alamat Perusahaan" wire:model="office_address" />
                                        @error('office_address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label class="col-3 col-form-label">Lama Bekerja<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Lama Bekerja" wire:model="length_of_work" />
                                        @error('length_of_work')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Pemasukan<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Permasukan per Bulan" wire:model="total_income" />
                                        @error('total_income')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group pt-3">
                                        <label>Pengeluaran<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Pengeluaran per Bulan"
                                            wire:model="total_expenditure" />
                                        @error('total_expenditure')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group pt-3">
                                        <label>Pemasukan Bersih<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Pemasukan Bersih" wire:model="net_income" />
                                        @error('net_income')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        @endif
                        <!--end::Wizard Step 3-->
                        <!--end::Wizard Step 5-->
                        @if ($section == 'loan')
                        <div class="pb-5"
                            {{$section == 'loan' ? 'data-wizard-type=step-content data-wizard-state=current' : 'data-wizard-type=step-content'}}
                            wire:ignore.self>
                            <h4 class="mb-10 font-weight-bold text-dark">Agunan</h4>
                            <!--begin::Input-->
                            <div class="form-group">
                                <label for="exampleSelect1">Jenis Agunan
                                    <span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid form-control-lg" wire:model="type"
                                    wire:click="choose('{{ $type }}')">
                                    <option value="">-- Pilih --</option>
                                    <option value="no_collateral">Tidak Agunan</option>
                                    <option value="shm">SHM/Letter C</option>
                                    <option value="decree_empolyee">SK Karyawan</option>
                                    <option value="bpkb_vehicle">BPKB Kendaraan</option>
                                </select>
                                @error('type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($type == 'no_collateral')
                            @elseif ($type == 'shm')
                            <div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nomor Sertifikat/Letter C<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth:12345678" wire:model="land_certificate_number" />
                                            @error('land_certificate_number')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Luas (Dalam m2)<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: 1.000 meter" wire:model="land_size" />
                                            @error('land_size')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Atas Nama<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                wire:model="land_owner_name" />
                                            @error('land_owner_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nomor Telepon<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: 081223344xxx" wire:model="land_phone" />
                                            @error('land_phone')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Lokasi<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-solid form-control-lg"
                                        placeholder="cth: jl.Medan Merdeka no 3" wire:model="land_address" />
                                    @error('land_address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <h6 class="mb-10 font-weight-bold text-dark">Penilaian Agunan</h6>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Harga Penilaian<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="IDR 0.00" wire:model="valuation_price" />
                                            @error('valuation_price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Harga Pasar Wajar<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="IDR 0.00" wire:model="market_price" />
                                            @error('market_price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" class="form-control form-control-solid form-control-lg"
                                        wire:model="notes" />
                                </div>
                                <!--end::Input-->
                                <div class="form-group text-center">
                                    <label>Foto Agunan<span class="text-danger">*</span></label>
                                    <div>
                                        <div class="image-input image-input-outline">
                                            <div class="image-input-wrapper"
                                                style="background-image: url({{$temp_image_collateral ?? 'media/users/360x360.png' }})">
                                            </div>
                                            <label
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="change" data-toggle="tooltip" title=""
                                                data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" accept=".png, .jpg, .jpeg"
                                                    wire:model="image_collateral" />
                                                <input type="hidden" />
                                            </label>
                                        </div>
                                    </div>
                                    <div wire:loading wire:target="image_collateral">Mengunggah...</div>
                                    @error('image_collateral')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @elseif ($type == 'decree_empolyee')
                            <div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nomor SK<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: SK24677188181"
                                                wire:model="employee_certificate_number" />
                                            @error('employee_certificate_number')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nama Instansi<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: PT. ABC" wire:model="employee_office" />
                                            @error('employee_office')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Atas Nama<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                wire:model="employee_owner_name" />
                                            @error('employee_owner_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Tahun<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: 2019" wire:model="employee_year" />
                                            @error('employee_year')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                            </div>
                            @elseif ($type == 'bpkb_vehicle')
                            <div>
                                <!--begin::Input-->
                                <label>Jenis Kendaraan<span class="text-danger">*</span></label>
                                <select class="form-control form-control-solid form-control-lg"
                                    wire:model="vehicle_type">
                                    <option value="">-- Pilih --</option>
                                    <option value="motor">Sepeda Motor</option>
                                    <option value="car">Mobil</option>
                                    <option value="truck">Truk/Bus</option>
                                    <option value="other">Lain-lain</option>
                                </select>
                                @error('vehicle_type')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <!--end::Input-->
                                <div class="row mt-2">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Atas Nama<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                wire:model="vehicle_owner_name" />
                                            @error('vehicle_owner_name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nomor BPKB<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: 814426667" wire:model="vehicle_bpkb" />
                                            @error('vehicle_bpkb')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                        <div class="form-group">
                                            <label>Nomor STNK<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                wire:model="vehicle_stnk" />
                                            @error('vehicle_stnk')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nomor Kendaraan<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: G 1234 GG" wire:model="vehicle_number" />
                                            @error('vehicle_number')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Merek<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: Honda" wire:model="vehicle_brand" />
                                            @error('vehicle_brand')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Tahun<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="cth: 2008" wire:model="vehicle_year" />
                                            @error('vehicle_year')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <h6 class="mb-10 font-weight-bold text-dark">Penilaian Agunan</h6>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Harga Penilaian<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="IDR 0.00" wire:model="valuation_price" />
                                            @error('valuation_price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Harga Pasar Wajar<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="IDR 0.00" wire:model="market_price" />
                                            @error('market_price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" class="form-control form-control-solid form-control-lg"
                                        wire:model="notes" />
                                </div>
                                <!--end::Input-->
                                <div class="form-group text-center">
                                    <label>Foto Agunan<span class="text-danger">*</span></label>
                                    <div>
                                        <div class="image-input image-input-outline">
                                            <div class="image-input-wrapper"
                                                style="background-image: url({{$temp_image_collateral ?? 'media/users/360x360.png' }})">
                                            </div>
                                            <label
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="change" data-toggle="tooltip" title=""
                                                data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" accept=".png, .jpg, .jpeg"
                                                    wire:model="image_collateral" />
                                                <input type="hidden" />
                                            </label>
                                        </div>
                                    </div>
                                    <div wire:loading wire:target="image_collateral">Mengunggah...</div>
                                    @error('image_collateral')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @endif
                        </div>
                        @endif
                        <!--end::Wizard Step 4-->
                        <!--begin::Wizard Step 5-->
                        @if ($section == 'confirm')
                        <div class="pb-5"
                            {{$section == 'confirm' ? 'data-wizard-type=step-content data-wizard-state=current' : 'data-wizard-type=step-content'}}
                            wire:ignore.self>
                            <!--begin::Section-->
                            <h4 class="mb-10 font-weight-bold text-dark">Proses Transaksi</h4>
                            <h6 class="font-weight-bolder mb-3">Biodata Diri:</h6>
                            <div class="text-dark-50 line-height-lg">
                                <div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>NIK</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{ $id_number}}</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Nama</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{ $name }}</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Jenis Kelamin</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{ $gender }}</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Nomor Telepon</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{ $no_handphone }}</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Agama</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{ $religion }}</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Alamat</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{ $address }}, {{Str::title($district_name)}},
                                                {{ Str::title($city_name) }}, {{ Str::title($province_name) }},
                                                {{ $postal_code }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <h6 class="font-weight-bolder mb-3">Agunan :</h6>
                            <div class="text-dark-50 line-height-lg">
                                <div>
                                    @if ($type == 'no_collateral')
                                    <div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Jenis Agunan : </div>
                                            </div>
                                            <div class="col sm-2">
                                                <div>{{ $type == 'no_collateral' ? 'Tanpa Agunan' : '' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif ($type == 'shm')
                                    <div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Jenis Agunan</div>
                                            </div>
                                            <div class="col sm-2">
                                                <div>{{ $type == 'shm' ? 'SHM/Letter C' : '' }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Nomor Sertifikat</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $land_certificate_number }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Luas (Dalam m2)</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $land_size }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Atas Nama</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $land_owner_name }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Nomor Telepon</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $land_phone }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Lokasi</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $land_address }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Harga Penilaian</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $valuation_price }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Harga Pasar Wajar</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $market_price }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Catatan</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $notes ? $notes : 'Tidak ada catatan' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif ($type == 'decree_empolyee')
                                    <div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Jenis Agunan</div>
                                            </div>
                                            <div class="col sm-4">
                                                <div>{{ $type == 'decree_empolyee' ? 'SK Karyawan' : '' }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Nomor SK</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $employee_certificate_number }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Nama Instansi</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $employee_office }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Atas Nama</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $employee_owner_name }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Tahun</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $employee_year }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif ($type == 'bpkb_vehicle')
                                    <div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Jenis Agunan</div>
                                            </div>
                                            <div class="col sm-2">
                                                <div>{{ $type == 'bpkb_vehicle' ? 'BPKB Kendaraan' : '' }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Jenis Kendaraan</div>
                                            </div>
                                            <div class="col-sm-4">
                                                @if ($vehicle_type == 'motor')
                                                <div>Sepeda Motor</div>
                                                @elseif ($vehicle_type == 'car')
                                                <div>Mobil</div>
                                                @elseif ($vehicle_type == 'truck')
                                                <div>Truk/Bis</div>
                                                @elseif ($vehicle_type == 'other')
                                                <div>Lain -Lain</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Atas Nama</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $vehicle_owner_name }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Nomor BPKB</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $vehicle_bpkb }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Nomor STNK</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $vehicle_stnk }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Nomor Kendaraan</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $vehicle_number }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Merek</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $vehicle_brand }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Tahun</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $vehicle_year }}</div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-2">
                                                <div>Catatan</div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div>{{ $notes ? $notes : 'Tidak ada catatan' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Section-->
                            <!--begin::Section-->
                            <h6 class="font-weight-bolder mb-3">Pinjaman:</h6>
                            <div class="text-dark-50 line-height-lg">
                                <div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Jumlah Pinjaman</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>Rp.{{ number_format($transaction_data['data']['loan']['amount'],2,',','.') }}</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Jangka Waktu</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{ $transaction_data['data']['loan']['tenor'] }} </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Daerah</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{Str::title($district_name)}}, {{ Str::title($city_name) }}</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Bunga :</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>{{ number_format( $transaction_data['data']['product'][0]['product']['product_loan']['interest_rates'],1) }}%</div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-sm-2">
                                            <div>Cicilan per bulan</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>Rp. {{number_format( $transaction_data['data']['product'][0]['installment'],2,',','.') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        @endif
                        <!--end::Wizard Step 5-->
                        <hr>
                        <div class="d-flex p-2">
                            @if ($section != 'biodata')
                            <button class="btn btn-light-primary px-9 py-4" type="button"
                                wire:click="backStep('{{$section}}')" onclick="scrollToTop()">Kembali</button>
                            @endif
                            @if ($section != 'confirm')
                            <button class="btn btn-primary font-weight-bolder text-uppercase ml-auto px-9 py-4"
                                type="button" wire:click="stepValidation('{{ $section }}')"
                                onclick="scrollToTop()">Selanjutnya</button>
                            @else
                            <button class="btn btn-success font-weight-bolder text-uppercase ml-auto px-9 py-4"
                                type="submit">Pinjam
                                <div role="status" wire:target="confirmTransaction"
                                    wire:loading.class="spinner-border small-spinner-size">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                            @endif
                        </div>
                    </form>
                    @include('components.modals.modal', [
                        'modal_id' => 'confirmTransaction',
                        'modal_static' => 'static',
                        'modal_label' => 'labelConfirmTransaction',
                        'modal_title' => 'Konfirmasi Peminjaman',
                        'modal_content' => 'Yakin ingin meminjam ?',
                        'modal_action' => 'wire:click=saveUser',
                        'modal_button' => 'Konfirmasi'
                    ])
                </div>
            </div>
        </div>
    </div>
</div>


@push('css')
<style>
    .icon-wizard {
        font-size: 3.75rem;
    }

    @media (max-width: 767.98px) {
        .icon-wizard {
            font-size: 1.5rem;
        }
    }

</style>
@endpush

@push('scripts')
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    window.addEventListener('openConfirmModal', event => {
        $("#confirmTransaction").modal('show');
    });
</script>
@endpush
