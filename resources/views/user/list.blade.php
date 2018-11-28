@extends('layouts.master')
@section('dashboard','Admin')
@section('content')
@if (session('status'))
<div id="flash-message" class="alert alert-success" align="center">
	<b>
	{{ session('status') }}
	</b>
</div>
@endif
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">All Users</h3>
			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>
							<th>Name</th>
							<th>Contact</th>
							<th>Email</th>
							<th>Preferred Contact</th>
							<th>Gender</th>
							<th>Modify</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $cat)
						<tr>
							<td>{{$cat->name}}</td>
							<td>{{$cat->contact}}</td>
							<td>{{$cat->email}}</td>
							<td>{{$cat->preferred_mode_of_contact}}</td>
							<td>{{$cat->gender}}</td>
							<td>
								<button class="btn btn-info" data-myname="{{$cat->name}}" data-mycontact="{{$cat->contact}}" data-myemail="{{$cat->email}}" data-myprecon="{{$cat->preferred_mode_of_contact}}" data-mygender="{{$cat->gender}}" data-catid="{{$cat->id}}" data-toggle="modal" data-target="#edit">Edit</button>
								/
							<button class="btn btn-danger" data-catid="{{$cat->id}}" data-toggle="modal" data-target="#delete">Delete</button></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@include('category.modal')
@endsection