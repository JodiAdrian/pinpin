<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Ubah Pengguna</h2>
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
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Nav Panel Widget 1-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Nav Tabs-->
                            <ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0 flex-column flex-sm-row"
                                role="tablist">
                                <!--begin::Item-->
                                <li
                                    class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor-pointer">
                                    <a wire:click="sectionPersonal"
                                        class="nav-link {{ $section == 'personal' ? 'active' : ''}} border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                                        data-toggle="pill">
                                        <span class="nav-icon py-2 w-auto">
                                            <span class="svg-icon svg-icon-3x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Movie-Lane2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M6,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,19 C20,20.1045695 19.1045695,21 18,21 L6,21 C4.8954305,21 4,20.1045695 4,19 L4,5 C4,3.8954305 4.8954305,3 6,3 Z M5.5,5 C5.22385763,5 5,5.22385763 5,5.5 L5,6.5 C5,6.77614237 5.22385763,7 5.5,7 L6.5,7 C6.77614237,7 7,6.77614237 7,6.5 L7,5.5 C7,5.22385763 6.77614237,5 6.5,5 L5.5,5 Z M17.5,5 C17.2238576,5 17,5.22385763 17,5.5 L17,6.5 C17,6.77614237 17.2238576,7 17.5,7 L18.5,7 C18.7761424,7 19,6.77614237 19,6.5 L19,5.5 C19,5.22385763 18.7761424,5 18.5,5 L17.5,5 Z M5.5,9 C5.22385763,9 5,9.22385763 5,9.5 L5,10.5 C5,10.7761424 5.22385763,11 5.5,11 L6.5,11 C6.77614237,11 7,10.7761424 7,10.5 L7,9.5 C7,9.22385763 6.77614237,9 6.5,9 L5.5,9 Z M17.5,9 C17.2238576,9 17,9.22385763 17,9.5 L17,10.5 C17,10.7761424 17.2238576,11 17.5,11 L18.5,11 C18.7761424,11 19,10.7761424 19,10.5 L19,9.5 C19,9.22385763 18.7761424,9 18.5,9 L17.5,9 Z M5.5,13 C5.22385763,13 5,13.2238576 5,13.5 L5,14.5 C5,14.7761424 5.22385763,15 5.5,15 L6.5,15 C6.77614237,15 7,14.7761424 7,14.5 L7,13.5 C7,13.2238576 6.77614237,13 6.5,13 L5.5,13 Z M17.5,13 C17.2238576,13 17,13.2238576 17,13.5 L17,14.5 C17,14.7761424 17.2238576,15 17.5,15 L18.5,15 C18.7761424,15 19,14.7761424 19,14.5 L19,13.5 C19,13.2238576 18.7761424,13 18.5,13 L17.5,13 Z M17.5,17 C17.2238576,17 17,17.2238576 17,17.5 L17,18.5 C17,18.7761424 17.2238576,19 17.5,19 L18.5,19 C18.7761424,19 19,18.7761424 19,18.5 L19,17.5 C19,17.2238576 18.7761424,17 18.5,17 L17.5,17 Z M5.5,17 C5.22385763,17 5,17.2238576 5,17.5 L5,18.5 C5,18.7761424 5.22385763,19 5.5,19 L6.5,19 C6.77614237,19 7,18.7761424 7,18.5 L7,17.5 C7,17.2238576 6.77614237,17 6.5,17 L5.5,17 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M11.3521577,14.5722612 L13.9568442,12.7918113 C14.1848159,12.6359797 14.2432972,12.3248456 14.0874656,12.0968739 C14.0526941,12.0460053 14.0088196,12.002002 13.9580532,11.9670814 L11.3533667,10.1754041 C11.1258528,10.0189048 10.8145486,10.0764735 10.6580493,10.3039875 C10.6007019,10.3873574 10.5699997,10.4861652 10.5699997,10.5873545 L10.5699997,14.1594818 C10.5699997,14.4356241 10.7938573,14.6594818 11.0699997,14.6594818 C11.1706891,14.6594818 11.2690327,14.6290818 11.3521577,14.5722612 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Data
                                            Pribadi</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li
                                    class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor-pointer">
                                    <a wire:click="sectionAddress"
                                        class="nav-link {{ $section == 'address' ? 'active' : ''}} border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                                        data-toggle="pill">
                                        <span class="nav-icon py-2 w-auto">
                                            <span class="svg-icon svg-icon-3x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3"
                                                            height="16" rx="1.5" />
                                                        <rect fill="#000000" x="8" y="9" width="3" height="11"
                                                            rx="1.5" />
                                                        <rect fill="#000000" x="18" y="11" width="3" height="9"
                                                            rx="1.5" />
                                                        <rect fill="#000000" x="3" y="13" width="3" height="7"
                                                            rx="1.5" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Alamat
                                            Rumah</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li
                                    class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0 cursor-pointer">
                                    <a wire:click="sectionEmployment"
                                        class="nav-link {{ $section == 'employment' ? 'active' : ''}} border py-10 d-flex flex-grow-1 rounded flex-column align-items-center"
                                        data-toggle="pill">
                                        <span class="nav-icon py-2 w-auto">
                                            <span class="svg-icon svg-icon-3x">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Data
                                            Pekerjaan</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav Tabs-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--begin::Nav Panel Widget 1-->
                </div>
            </div>
            <!--end::Row-->
            @if ($section == 'personal')
            @include('components.alerts.alert-success')
            @include('components.alerts.alert-warning')
            <div class="card-body">
                    <div>
                        <div class="row d-flex justify-content-around ml-auto mr-auto">
                            <div class="form-group">
                                <label>Foto NPWP</label>
                                <div>
                                    @if ($temp_tax_image == null)
                                    <div class="image-input image-input-outline">
                                        <div class="image-input-wrapper"
                                            style="background-image: url({{ $temp_tax_image ?? '../media/users/360x360.png' }})">
                                        </div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Ubah foto NPWP">
                                            <i class="fa fa-plus icon-sm text-muted"></i>
                                            <input type="file" wire:model="tax_image" />
                                        </label>
                                    </div>
                                    @else
                                    <div class="image-input image-input-outline">
                                        <div class="image-input-wrapper"
                                            style="background-image: url({{ $tax_image ? $temp_tax_image : '../storage/media/user/'.$temp_tax_image }})">
                                        </div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Ubah foto NPWP">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" wire:model="tax_image" />
                                        </label>
                                    </div>
                                    @endif
                                </div>
                                <div wire:loading wire:target="tax_image">Mengunggah...</div>
                                @error('tax_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto KTP</label>
                                <div>
                                    @if ($temp_image_id == null)
                                    <div class="image-input image-input-outline">
                                        <div class="image-input-wrapper"
                                            style="background-image: url({{ $temp_image_id ?? '../media/users/360x360.png' }})">
                                        </div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Ubah foto KTP">
                                            <i class="fa fa-plus icon-sm text-muted"></i>
                                            <input type="file" wire:model="image_id" />
                                        </label>
                                    </div>
                                    @else
                                    <div class="image-input image-input-outline">
                                        <div class="image-input-wrapper"
                                            style="background-image: url({{ $image_id ? $temp_image_id : '../storage/media/user/'.$temp_image_id }})">
                                        </div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Ubah foto KTP">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" wire:model="image_id" />
                                        </label>
                                    </div>
                                    @endif
                                </div>
                                <div wire:loading wire:target="image_id">Mengunggah...</div>
                                @error('image_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto Selfie KTP</label>
                                <div>
                                    @if ($temp_selfie_image == null)
                                    <div class="image-input image-input-outline">
                                        <div class="image-input-wrapper"
                                            style="background-image: url({{ $temp_selfie_image ?? '../media/users/360x360.png' }})">
                                        </div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Ubah foto selfie KTP">
                                            <i class="fa fa-plus icon-sm text-muted"></i>
                                            <input type="file" wire:model="selfie_image" />
                                        </label>
                                    </div>
                                    @else
                                    <div class="image-input image-input-outline">
                                        <div class="image-input-wrapper"
                                            style="background-image: url({{ $selfie_image ? $temp_selfie_image : '../storage/media/user/'.$temp_selfie_image }})">
                                        </div>
                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Ubah foto selfie KTP">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" wire:model="selfie_image" />
                                        </label>
                                    </div>
                                    @endif
                                </div>
                                <div wire:loading wire:target="selfie_image">Mengunggah...</div>
                                @error('selfie_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <h5 class="font-weight-bold mt-5 mb-6">Biodata</h5>
                        <div class="row">
                            <div class="col-xl-6">
                                <!--begin::Input-->
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-solid form-control-lg"
                                        placeholder="Masukkan Nama Lengkap" wire:model="name" />
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input-->
                                <!--begin::Input-->
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="radio-inline pt-5">
                                        <label class="radio radio-lg">
                                            <input value="Laki - Laki" type="radio" wire:model="gender">
                                            <span></span>Laki - Laki</label>
                                        <label class="radio radio-lg">
                                            <input value="Perempuan" type="radio" wire:model="gender">
                                            <span></span>Perempuan</label>
                                    </div>
                                    @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input-->
                                <!--begin::Input-->
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control form-control-solid form-control-lg"
                                        placeholder="Tempat Lahir" wire:model="place_of_birth" />
                                    @error('place_of_birth')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input-->
                                <!--begin::Select-->
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-solid form-control-lg"
                                        wire:model="birth_date" />
                                    @error('birth_date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Select-->
                            </div>
                            <div class="col-xl-6">
                                <!--begin::Input-->
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" class="form-control form-control-solid form-control-lg"
                                        placeholder="Masukkan NIK" wire:model="id_number" />
                                    @error('id_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input-->
                                <!--begin::Input-->
                                <div class="form-group">
                                    <label>Nomor NPWP</label>
                                    <input type="text" class="form-control form-control-solid form-control-lg"
                                        wire:model="tax_number" placeholder="Masukkan Nomor NPWP" />
                                    @error('tax_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input-->
                                <!--begin::Input-->
                                <div class="form-group">
                                    <label for="exampleSelect1">Agama
                                        <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-solid form-control-lg" id="exampleSelect1"
                                        wire:model="religion">
                                        <option value="">-- Pilih --</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Kristen Katholik">Kristen Katholik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                    </select>
                                    @error('religion')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!--end::Input-->
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-lg btn-light-primary mr-10" wire:click="cancelUpdatePersonal">Kembali
                                <div role="status" wire:target="cancelUpdatePersonal"
                                    wire:loading.class="spinner-border small-spinner-size">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                            <button class="btn btn-lg btn-primary"
                                wire:click="savePersonal({{ $user->id }})">Perbaharui
                                <div role="status" wire:target="savePersonal({{ $user->id }})"
                                    wire:loading.class="spinner-border small-spinner-size">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            @elseif ($section == 'address')
            @include('components.alerts.alert-success')
            @include('components.alerts.alert-warning')
            @json($user->personal)
            <div>
                <h4 class="mb-10 font-weight-bold text-dark">Alamat</h4>
                <!--begin::Input-->
                <div class="form-group">
                    <label>Provinsi<span class="text-danger">*</span></label>
                    <select class="form-control form-control-solid form-control-lg" wire:model="province_id">
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
                    <label {{ $province_id ? '' : 'hidden'}}>Kota / Kabupaten<span class="text-danger">*</span></label>
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
                    <label {{ $province_id && $city_id && $district_id && $postal_code ? '' : 'hidden'}}>Alamat
                        Lengkap<span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-solid form-control-lg"
                        placeholder="Masukkan Alamat Lengkap" wire:model="address"
                        {{ $province_id && $city_id && $district_id && $postal_code ? '' : 'hidden'}} />
                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <!--end::Input-->
                <div class="text-right">
                    <button class="btn btn-lg btn-light-primary mr-10" wire:click="cancelUpdateAddress">Kembali
                        <div role="status" wire:target="cancelUpdateAddress"
                            wire:loading.class="spinner-border small-spinner-size">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </button>
                    <button class="btn btn-lg btn-primary" wire:click="saveAddress({{ $user->id }})">Perbaharui
                        <div role="status" wire:target="saveAddress({{ $user->id }})"
                            wire:loading.class="spinner-border small-spinner-size">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </button>
                </div>
            </div>
            @elseif ($section == 'employment')
            @json($user->employment)
            <div>
                    <h4 class="mb-10 font-weight-bold text-dark">Alamat</h4>
                    <!--begin::Input-->
                    <div class="form-group">
                        <label>Provinsi<span class="text-danger">*</span></label>
                        <select class="form-control form-control-solid form-control-lg" wire:model="province_id">
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
                        <label {{ $province_id ? '' : 'hidden'}}>Kota / Kabupaten<span class="text-danger">*</span></label>
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
                        <label {{ $province_id && $city_id && $district_id && $postal_code ? '' : 'hidden'}}>Alamat
                            Lengkap<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-solid form-control-lg"
                            placeholder="Masukkan Alamat Lengkap" wire:model="address"
                            {{ $province_id && $city_id && $district_id && $postal_code ? '' : 'hidden'}} />
                        @error('address')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--end::Input-->
                    <div class="text-right">
                        <button class="btn btn-lg btn-light-primary mr-10" wire:click="cancelUpdateAddress">Kembali
                            <div role="status" wire:target="cancelUpdateAddress"
                                wire:loading.class="spinner-border small-spinner-size">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                        <button class="btn btn-lg btn-primary" wire:click="saveAddress({{ $user->id }})">Perbaharui
                            <div role="status" wire:target="saveAddress({{ $user->id }})"
                                wire:loading.class="spinner-border small-spinner-size">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                    </div>
                </div>
            @endif
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
