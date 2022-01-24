<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
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
                                <h2 class="d-flex align-items-center text-dark font-weight-bold ml-3">Pengguna</h2>
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
            @include('components.alerts.alert-success')
            @include('components.alerts.alert-danger')
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <!-- Modal -->
                    @include('components.modals.modal', [
                        'modal_id' => 'delete_user',
                        'modal_static' => 'static',
                        'modal_label' => 'labelModalDelete',
                        'modal_title' => 'Hapus User',
                        'modal_content' => 'Yakin ingin menghapus user ?',
                        'modal_action' => 'wire:click=delete_user',
                        'modal_button' => 'Hapus'
                    ])
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-user text-primary"></i>
                        </span>
                        <h3 class="card-label">Pengguna
                    </div>
                </div>
                <div class="card-body">
                    <div wire:ignore>
                        @include('components.datatables.datatable',[
                        'table_source' => 'table_user',
                        'column_names' => ['Tanggal Dibuat', 'Nama', 'Email', ' ']
                        ])
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@push('css')
<link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('script')
@include('components.datatables.config', [
'table_source' => 'table_user',
'url' => route('user.data'),
'ordering' => [[0, "ASC"]],
'column_defs' => [],
'columns' => [
['data' => 'created_at', 'name' => 'created_at'],
['data' => 'name', 'name' => 'name'],
['data' => 'email', 'name' => 'email'],
['data' => 'delete', 'name' => 'delete', 'searchable' => false, 'orderable' => false, 'width' => '200px'],
],
])

<script>
    function edit_user(id) {
        Livewire.emit('edit_user', id);
    }

    function modal_delete_user(id) {
        Livewire.emit('select_modal', id, 'delete');
    }


    window.addEventListener('openDeleteModal', event => {
        $("#delete_user").modal('show');
    });

    window.addEventListener('closeDeleteModal', event => {
        $("#delete_user").modal('hide');
    });
</script>
@endpush
