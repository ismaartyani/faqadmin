{!! Form::model($model, [
    'route' => $model->exists ? ['kategori.update', $model->id] : 'kategori.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Nama</label>
        {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Judul</label>
        {!! Form::text('judul', null, ['class' => 'form-control', 'id' => 'judul']) !!}
    </div>

{!! Form::close() !!}
