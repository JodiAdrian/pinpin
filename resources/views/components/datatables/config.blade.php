<script src="{{ asset('js/datatables.js') }}"></script>
<script>
    var {{ $table_source}} = $('#{{ $table_source}}').DataTable({
        scrollX: true,
        searchDelay: 500,
        processing: true,
        serverSide: true,
        cache: true,
        ajax: '{{ $url }}',
        language: {
            processing: '<div class="spinner spinner-primary spinner-right">Mohon Tunggu...<div>',
        },
        order:@json($ordering),
        columnDefs: @json($column_defs),
        columns: @json($columns),
    });
    {{ $table_source }}.ajax.reload();
</script>