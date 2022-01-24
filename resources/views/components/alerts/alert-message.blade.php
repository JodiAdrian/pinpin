@if (session()->has('message'))
<div class="alert alert-custom alert-light-info fade show mb-5 shadow-sm" role="alert">
    <div class="alert-icon">
        <i class="flaticon2-check-mark"></i>
    </div>
    <div class="alert-text">{{ session('message') }}</div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" arial-label="Close">
            <span aria-hidden="true">
                <i class="ki ki-close"></i>
            </span>
        </button>
    </div>
</div>
@endif