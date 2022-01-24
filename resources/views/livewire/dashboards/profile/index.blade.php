<div class="content d-flex flex-column flex-column-fluid">
    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                    id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap ml-3">
                    <a href="{{ route('dashboard') }}" class="row">
                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\Navigation\Arrow-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
                                    <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                            <!--begin::Page Title-->
                            <h2 class="d-flex align-items-center text-dark font-weight-bold ml-3">Profil Saya</h2>
                    </a>
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
            <!--begin::Profile Personal Information-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div
                                    class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label"
                                        style="background-image:url('https://ui-avatars.com/api/?name={{auth()->user()->name}}&size=128&)">
                                    </div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href="#"
                                        class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{ auth()->user()->name }}</a>
                                </div>
                            </div>
                            <!--end::User-->
                            <hr>
                            <!--begin::Nav-->
                            <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                <div class="navi-item mb-2 cursor-pointer">
                                    <a wire:click="sectionPersonal"
                                        class="navi-link py-4 {{ $section == 'personal' ? 'active' : 'null' }}"
                                        onclick="scrollToTop()">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="navi-text font-size-lg">Data Pribadi</span>
                                    </a>
                                </div>
                                <div class="navi-item mb-2 cursor-pointer">
                                    <a wire:click="sectionEmployment"
                                        class="navi-link py-4 {{ $section == 'employment' ? 'active' : 'null' }}"
                                        onclick="scrollToTop()">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="navi-text font-size-lg">Data Pekerjaan</span>
                                    </a>
                                </div>
                                <div class="navi-item mb-2 cursor-pointer">
                                    <a wire:click="sectionInformation"
                                        class="navi-link py-4 {{ $section == 'information' ? 'active' : 'null' }}"
                                        onclick="scrollToTop()">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="navi-text font-size-lg">Informasi Akun</span>
                                    </a>
                                </div>
                                <div class="navi-item mb-2 cursor-pointer">
                                    <a wire:click="sectionChangePassword"
                                        class="navi-link py-4 {{ $section == 'change_password' ? 'active' : 'null' }}"
                                        onclick="scrollToTop()">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="navi-text font-size-lg">Ganti Kata Sandi</span>
                                        <span class="navi-label">
                                            <span
                                                class="label label-light-danger label-rounded font-weight-bold">5</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Header-->
                        @if ($section == 'personal')
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Data Pribadi</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Perbaharui data
                                    pribadi</span>
                            </div>
                            <div class="card-toolbar">
                                @if (!$edit_personal)
                                <button type="button" class="btn btn-success mr-2"
                                    wire:click="$set('edit_personal', {{!$edit_personal}})">Ubah Data Pribadi</button>
                                @elseif ($edit_personal)
                                <button class="btn btn-success mr-2" wire:click="savePersonal" >Perbaharui
                                    Data</button>
                                <button type="button" class="btn btn-success mr-2"
                                    wire:click="cancelUpdatePersonal">Cancel</button>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            @include('components.alerts.alert-success')
                            @include('components.alerts.alert-warning')
                            <div class="row d-flex justify-content-between ml-auto mr-auto">
                                <div class="form-group">
                                        <label>Foto NPWP</label>
                                        <div>
                                            @if ($temp_tax_image == null)
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $temp_tax_image ?? 'media/users/360x360.png' }})">
                                                </div>
                                                @if ($edit_personal)
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto NPWP">
                                                    <i class="fa fa-plus icon-sm text-muted"></i>
                                                    <input type="file" wire:model="tax_image" />
                                                </label>
                                                @endif
                                            </div>
                                            @else
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $tax_image ? $temp_tax_image : 'storage/media/user/'.$temp_tax_image }})">
                                                </div>
                                                @if ($edit_personal)
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto NPWP">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" wire:model="tax_image" />
                                                </label>
                                                @endif
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
                                                style="background-image: url({{ $temp_image_id ?? 'media/users/360x360.png' }})">
                                            </div>
                                            @if ($edit_personal)
                                            <label
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="change" data-toggle="tooltip" title=""
                                                data-original-title="Tambah foto KTP">
                                                <i class="fa fa-plus icon-sm text-muted"></i>
                                                <input type="file" wire:model="image_id" />
                                            </label>
                                            @endif
                                        </div>
                                        @else
                                        <div class="image-input image-input-outline">
                                            <div class="image-input-wrapper"
                                                style="background-image: url({{ $image_id ? $temp_image_id : 'storage/media/user/'.$temp_image_id }})">
                                            </div>
                                            @if ($edit_personal)
                                            <label
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="change" data-toggle="tooltip" title=""
                                                data-original-title="Tambah foto KTP">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" wire:model="image_id" />
                                            </label>
                                            @endif
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
                                                    style="background-image: url({{ $temp_selfie_image ?? 'media/users/360x360.png' }})">
                                                </div>
                                                @if ($edit_personal)
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto selfie KTP">
                                                    <i class="fa fa-plus icon-sm text-muted"></i>
                                                    <input type="file" wire:model="selfie_image" />
                                                </label>
                                                @endif
                                            </div>
                                            @else
                                            <div class="image-input image-input-outline">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ $selfie_image ? $temp_selfie_image : 'storage/media/user/'.$temp_selfie_image }})">
                                                </div>
                                                @if ($edit_personal)
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Tambah foto selfie KTP">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" wire:model="selfie_image" />
                                                </label>
                                                @endif
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
                                            placeholder="Masukkan Nama Lengkap" wire:model="name"
                                            {{ $edit_personal ? 'focused' : 'disabled'}} />
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
                                                <input value="Laki - Laki" type="radio" wire:model="gender"
                                                    {{ $edit_personal ? 'focused' : 'disabled'}}>
                                                <span></span>Laki - Laki</label>
                                            <label class="radio radio-lg">
                                                <input value="Perempuan" type="radio" wire:model="gender"
                                                    {{ $edit_personal ? 'focused' : 'disabled'}}>
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
                                            placeholder="Tempat Lahir" wire:model="place_of_birth"
                                            {{ $edit_personal ? 'focused' : 'disabled'}} />
                                        @error('place_of_birth')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Select-->
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-solid form-control-lg"
                                            wire:model="birth_date" {{ $edit_personal ? '' : 'disabled'}} />
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
                                            placeholder="Masukkan NIK" wire:model="id_number"
                                            {{ $edit_personal ? '' : 'disabled'}} />
                                        @error('id_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nomor NPWP</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            wire:model="tax_number" placeholder="Masukkan Nomor NPWP"
                                            {{ $edit_personal ? '' : 'disabled'}} />
                                        @error('tax_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label for="exampleSelect1">Agama
                                            <span class="text-danger">*</span></label>
                                        <select class="form-control form-control-solid form-control-lg"
                                            id="exampleSelect1" wire:model="religion"
                                            {{ $edit_personal ? '' : 'disabled'}}>
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
                            <h5 class="font-weight-bold mt-5 mb-6">Alamat</h5>
                            <div class="form-group mb-1">
                                <label for="exampleTextarea">Alamat Lengkap
                                    <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-solid" id="exampleTextarea" rows="3"
                                    wire:model="address" {{ $edit_personal ? 'focused' : 'disabled'}}></textarea>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    @if ($edit_personal)
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
                                    @else
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            placeholder="Masukkan Provinsi" wire:model="province_id"
                                            {{ $edit_personal ? 'focused' : 'disabled'}} />
                                    </div>
                                    @endif
                                </div>
                                <div class="col-xl-6">
                                    @if ($edit_personal)
                                    <div class="form-group">
                                        <label>Kabupaten / Kota<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-solid form-control-lg"
                                            wire:model="city_id">
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
                                    @else
                                    <div class="form-group">
                                        <label>Kabupaten / Kota</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            placeholder="Masukkan Kabupaten / Kota" wire:model="city_id"
                                            {{ $edit_personal ? 'focused' : 'disabled'}} />
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    @if ($edit_personal)
                                    <div class="form-group">
                                        <label>Kecamatan<span class="text-danger">*</span></label>
                                        <select class="form-control form-control-solid form-control-lg"
                                            wire:model="district_id">
                                            <option>Pilih Kecamatan</option>
                                            @foreach ($districts as $district)
                                            <option value="{{$district->id}}">{{ Str::title($district->name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('district_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @else
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            placeholder="Masukkan Kecamatan" wire:model="district_id"
                                            {{ $edit_personal ? 'focused' : 'disabled'}} />
                                    </div>
                                    @endif
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            placeholder="Masukkan Kode Pos" wire:model="postal_code"
                                            {{ $edit_personal ? 'focused' : 'disabled'}} />
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if ($section == 'employment')
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Data Pekerjaan</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Perbaharui data
                                    pribadi</span>
                            </div>
                            <div class="card-toolbar">
                                @if (!$edit_employment)
                                <button type="button" class="btn btn-success mr-2"
                                    wire:click="$set('edit_employment', {{!$edit_employment}})">Ubah Data
                                    Pekerjaan</button>
                                @elseif ($edit_employment)
                                <button class="btn btn-success mr-2" wire:click="saveEmployment">Perbaharui
                                    Data</button>
                                <button type="button" class="btn btn-success mr-2"
                                    wire:click="cancelUpdateEmployment">Batal</button>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            @include('components.alerts.alert-success')
                            @include('components.alerts.alert-warning')
                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            {{ $edit_employment ? '' : 'disabled'}} wire:model="job_name" />
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            {{ $edit_employment ? '' : 'disabled'}} wire:model="office_name" />
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Lama Bekerja</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            {{ $edit_employment ? '' : 'disabled'}} wire:model="length_of_work" />
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Pemasukan per Bulan</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            {{ $edit_employment ? '' : 'disabled'}} wire:model="total_income" />
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Pengeluaran per Bulan</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            {{ $edit_employment ? '' : 'disabled'}} wire:model="total_expenditure" />
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Pemasukan Bersih</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            {{ $edit_employment ? '' : 'disabled'}} wire:model="net_income" />
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                            <div class="form-group mb-1">
                                <label for="exampleTextarea">Alamat Perusahaan</label>
                                <textarea class="form-control form-control-solid" id="exampleTextarea" rows="3"
                                    {{ $edit_employment ? '' : 'disabled'}} wire:model="office_address"></textarea>
                            </div>
                        </div>
                        @endif
                        @if ($section == 'information')
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Informasi Akun</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Perbaharui Akun Anda</span>
                            </div>
                            <div class="card-toolbar">
                                @if (!$edit_account)
                                <button type="button" class="btn btn-success mr-2"
                                    wire:click="$set('edit_account', {{!$edit_account}})">Ubah Informasi Akun</button>
                                @elseif ($edit_account)
                                <button class="btn btn-success mr-2" wire:click="saveAccount">Perbaharui
                                    Akun</button>
                                <button type="button" class="btn btn-success mr-2"
                                    wire:click="cancelUpdateAccount">Batal</button>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            @include('components.alerts.alert-success')
                            @include('components.alerts.alert-warning')
                            <div class="row">
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    @if (auth()->user()->username)
                                    <div class="form-group">
                                        <label>Nama Pengguna</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Username" value="{{ auth()->user()->username }}"
                                            disabled />
                                    </div>
                                    @endif
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    @if (auth()->user()->email)
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-at"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="Masukkan Email" value="{{ auth()->user()->email }}"
                                                disabled />
                                        </div>
                                    </div>
                                    @endif
                                    <!--end::Input-->
                                </div>
                                <div class="col-xl-6">
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nomor Rekening</label>
                                        <input type="text" class="form-control form-control-solid form-control-lg"
                                            placeholder="Masukkan Nomor Rekening" wire:model="account_number"
                                            {{ $edit_account ? '' : 'disabled'}} />
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Input-->
                                    <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control form-control-solid form-control-lg"
                                                placeholder="Masukkan Nomor Telepon" wire:model="no_handphone"
                                                {{ $edit_account ? '' : 'disabled'}} />
                                        </div>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                        </div>
                        @endif
                        @if ($section == 'change_password')
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Ubah Password</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Ubah password akun
                                    kamu</span>
                            </div>
                            <div class="card-toolbar">
                                <button type="submit" class="btn btn-light-success mr-2"
                                    wire:click="changePassword">Perbaharui</button>
                                <button type="reset" class="btn btn-light-danger">Lupa Password ?</button>
                            </div>
                        </div>
                        <div class="separator separator-dashed"></div>
                        <div class="card-body">
                            @include('components.alerts.alert-danger')
                            @if (!session()->has('error'))
                            <div class="alert alert-custom alert-light-danger fade show mb-10" role="alert">
                                <div class="alert-icon">
                                    <span class="svg-icon svg-icon-3x svg-icon-danger">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                                <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <div class="alert-text font-weight-bold">Hati - hati terhadap password !</div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                            <i class="ki ki-close"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            @endif
                            <!--end::Alert-->
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Kata sandi lama</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="password" class="form-control form-control-lg form-control-solid mb-2"
                                        placeholder="Masukkan kata sandi lama" wire:model="current_password" />
                                    @error('current_password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Kata sandi baru</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="password" class="form-control form-control-lg form-control-solid"
                                        placeholder="Masukkan kata sandi baru" wire:model="new_password" />
                                    @error('new_password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-alert">Konfirmasi kata
                                    sandi</label>
                                <div class="col-lg-9 col-xl-6">
                                    <input type="password" class="form-control form-control-lg form-control-solid"
                                        placeholder="Masukkan kata sandi baru" wire:model="confirm_password" />
                                    @error('confirm_password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!--end::Profile Personal Information-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@push('scripts')
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

</script>
@endpush
