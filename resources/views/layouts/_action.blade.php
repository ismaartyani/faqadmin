<!-- <a href="{{ $url_show }}" class="btn btn-xs btn-primary btn-show" title="Detail: {{ $model->name }}"><i class="glyphicon glyphicon-eye-open" >Show</i></a> |  -->
<a href="{{ $url_edit }}" class="btn btn-xs btn-primary modal-show edit" title="Edit {{ $model->name }}"><i class="glyphicon glyphicon-edit">Edit</i></a> |
<a href="{{ $url_destroy }}" class="btn btn-xs btn-primary btn-delete" title="{{ $model->name }}"><i class="glyphicon glyphicon-trash">Delete</i></a>

  <!-- '<ul <a href="#show-'.$model->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i>Show</a></ul>
            <ul <a href="#edit-'.$model->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a></ul>
            <ul <a href="#delete-'.$model->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i>hapus</a></ul>'; -->
