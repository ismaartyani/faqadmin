{!! Form::model($model, [
    'route' => $model->exists ? ['konten.update', $model->id] : 'konten.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Judul Konten</label>
        {!! Form::text('konten', null, ['class' => 'form-control', 'id' => 'konten']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Isi Konten</label>
        {!! Form::text('isi_konten', null, ['class' => 'form-control', 'id' => 'isi_konten']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">ID Kategori</label>
        {!! Form::number('id_kategori', null, ['class' => 'form-control', 'id' => 'id_kategori']) !!}
    </div>

{!! Form::close() !!}
