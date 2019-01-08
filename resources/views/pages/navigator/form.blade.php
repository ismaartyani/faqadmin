{!! Form::model($model, [
    'route' => $model->exists ? ['navigator.update', $model->id] : 'navigator.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Navigator</label>
        {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Link</label>
        {!! Form::text('link', null, ['class' => 'form-control', 'id' => 'link']) !!}
    </div>

{!! Form::close() !!}
