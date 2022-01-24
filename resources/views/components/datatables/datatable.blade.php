<!--begin: Datatable-->
<table class="table" id="{{ $table_source }}">
    <thead>
        <tr>
            @forelse ($column_names as $name)
                <th>{!! $name !!}</th>
            @empty
                <th> Tidak Ada Data </th>
            @endforelse
        </tr>
    </thead>
</table>
<!--end: Datatable-->
