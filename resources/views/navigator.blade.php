@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Datatable
          <a href="{{ route('navigator.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Create User"><i class="icon-plus"></i> Create</a>
      </h3>
    </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" style="width:100%">
              <thead>
                  <tr>
                     <th>ID</th>
                      <th>Nama</th>
                      <th>Link</th>
                      <th>Actions</th>
                  </tr>
              </thead>

          </table>
    </div>
</div>
@endsection
@push('scripts')
 <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.navigator') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nama', name: 'nama'},
                {data: 'link', name: 'link'},
                {data: 'action', name: 'action'}
            ]
        });
    </script>
 <!-- end Table Data Area --> -->
@endpush
