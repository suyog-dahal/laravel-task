<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			@if (count($errors) > 0)
			<div class = "alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">New User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="{{ route('category.store') }}" method="post">
				@csrf
				<div class="modal-body">
					@include('category.form')
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<div id="showBtn">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			@if (count($errors) > 0)
			<div class = "alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Edit User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="{{ route('category.update', 'test') }}" method="post">
				{{method_field('patch')}}
				@csrf
				<div class="modal-body">
					<input type="hidden" name="category_id" id="cat_id" value="">
					@include('category.form')
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<div id="showBtn">
						<button type="submit" class="btn btn-primary" onclick="">Save Changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="{{ route('category.destroy', 'test') }}" method="post">
				{{method_field('delete')}}
				@csrf
				<div class="modal-body">
					<p class="text-center">
						Are You Sure You Want To Delete This ?
					</p>
					<input type="hidden" name="category_id" id="cat_id" value="">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">No</button>
					<div id="showBtn">
						<button type="submit" class="btn btn-warning">Yes</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>