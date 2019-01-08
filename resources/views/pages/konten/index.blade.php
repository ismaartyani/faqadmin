@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Datatable Konten
           <a href="{{ route('konten.create') }}" class="btn btn-success pull-right modal-show" style="margin-top: -8px;" title="Create Konten"><i class="icon-plus"></i> Create</a>
      </h3>
    </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" style="width:100%">
              <thead>
                  <tr>
                     <th>ID</th>
                      <th>Konten</th>
                      <th>Isi Konten</th>
                      <th>ID Kategori</th>
                      <th>Action</th>
                      <th></th>
                  </tr>
              </thead>

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
            ajax: "{{ route('table.konten') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'konten', name: 'konten'},
                {data: 'isi_konten', name: 'isi_konten'},
                {data: 'id_kategori', name: 'id_kategori'},
                {data: 'action', name: 'action' }
            ]
        });
      });
    </script>
@endpush
