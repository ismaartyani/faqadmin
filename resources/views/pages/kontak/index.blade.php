@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Datatable
          <a href="{{ route('kontak.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Create Kontak"><i class="icon-plus"></i> Create</a>
      </h3>
    </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" style="width:100%">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>E-Mail</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                  <tr>
                      <th>Id</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>E-Mail</th>
                      <th></th>
                  </tr>
              </tfoot>
          </table>
    </div>
</div>
@endsection
 @push('scripts')
  <script>
     // src="{{ asset('js/app.js') }}" type="text/javascript">
    $(document).ready(function(){
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.kontak') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'alamat', name: 'alamat'},
                {data: 'no_tlp', name: 'no_tlp'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action' }
            ]
        });
      });
    </script>
@endpush
