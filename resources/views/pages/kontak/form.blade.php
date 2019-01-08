{!! Form::model($model, [
    'route' => $model->exists ? ['kontak.update', $model->id] : 'kontak.store',
    'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

    <div class="form-group">
        <label for="" class="control-label">Name</label>
        {!! Form::text('alamat', null, ['class' => 'form-control', 'id' => 'alamat']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">Name</label>
        {!! Form::text('no_tlp', null, ['class' => 'form-control', 'id' => 'no_tlp']) !!}
    </div>

    <div class="form-group">
        <label for="" class="control-label">E-Mail</label>
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
    </div>

{!! Form::close() !!}
