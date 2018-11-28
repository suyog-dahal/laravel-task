@extends('layouts.master')
@section('dashboard','Admin')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Add Users</div>

				<div class="card-body">
					@if (session('status'))
					<div id="flash-message" class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
					Add New
					</button>
					@include('category.modal')
				</div>
			</div>
		</div>
	</div>
</div>
@endsection