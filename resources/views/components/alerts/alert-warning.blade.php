@if (session()->has('warning'))
<div class="alert alert-custom alert-light-warning fade show mb-5 shadow-sm" role="alert">
    <div class="alert-icon">
        <i class="flaticon-warning"></i>
    </div>
    <div class="alert-text">{{ session('warning') }}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" arial-label="Close">
            <span aria-hidden="true">
                <i class="ki ki-close"></i>
            </span>
        </button>
    </div>
</div>
@endif