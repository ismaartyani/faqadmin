<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

        <h4 class="modal-title" id="myModalLabel">Create Item</h4>

      </div>

      <div class="modal-body">

      		<form data-toggle="validator" action="{{ route('category.store') }}" method="POST">

      			<div class="form-group">

					<label class="control-label" for="title">ID</label>

					<input type="integer" name="nama" class="form-control" data-error="Please enter nama." required />

					<div class="help-block with-errors"></div>

				</div>

				<div class="form-group">

					<label class="control-label" for="title">Nama</label>

					<textarea name="details" class="form-control" data-error="Please enter details." required></textarea>

					<div class="help-block with-errors"></div>
          <div class="form-group">

            <div class="form-group">

    					<label class="control-label" for="title">Judul</label>

    					<textarea name="details" class="form-control" data-error="Please enter details." required></textarea>
    					<div class="help-block with-errors"></div>
              <div class="form-group">
				<div class="form-group">

					<button type="submit" class="btn crud-submit btn-success">Submit</button>

				</div>

      		</form>

      </div>

    </div>

  </div>

</div>

resources/views/edit.blade.php

<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

        <h4 class="modal-title" id="myModalLabel">Edit Kategori</h4>
      </div>
      <div class="modal-body">

      		<form data-toggle="validator" action="/item-ajax/14" method="put">

      			<div class="form-group">

					<label class="control-label" for="title">ID</label>

					<input type="integer" name="title" class="form-control" data-error="Please enter id." required />

					<div class="help-block with-errors"></div>

				</div>

				<div class="form-group">

					<label class="control-label" for="title">Nama</label>

					<textarea name="details" class="form-control" data-error="Please enter details." required></textarea>

					<div class="help-block with-errors"></div>

				</div>
        <div class="form-group">

					<label class="control-label" for="title">Judul</label>

					<textarea name="details" class="form-control" data-error="Please enter details." required></textarea>

					<div class="help-block with-errors"></div>

				</div>

				<div class="form-group">

					<button type="submit" class="btn btn-success crud-submit-edit">Submit</button>

				</div>

      		</form>
      </div>

    </div>

  </div>

</div>
