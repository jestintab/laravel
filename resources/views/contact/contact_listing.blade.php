@extends('app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Contact Listings</div>

				<div class="panel-body">
				@if(Session::has('flash_message'))
			
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Deleted</strong> 
					
						{{ Session::get('flash_message') }}
					</div>
				@endif
					<a href="{{ url('/contacts-add') }}"><button  class="btn btn-primary">Add Contacts</button></a>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>SN</th>
								<th>Name</th>
								<th>E-mail</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
						
					<i class="fa fa-name-shape-o-direction"></i>
						
							
	
							@foreach ($user as $users)
								<tr>	
								<td> {{ $users->id }} </td>	
								<td> {{ $users->name }} </td>	
								<td> {{ $users->email }} </td>	
								<td> <a type="button" href="contacts-edit/{{ $users->id }}" class="btn btn-primary glyphicon glyphicon-edit"> </a> </td>	
								<td> <a type="button" data-toggle="modal" href='#delete-confirm'  class="btn btn-primary glyphicon glyphicon-trash"> </a> </td>	

								</tr>
										
							@endforeach

							
							<div class="modal fade" id="delete-confirm">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Confirm Delete</h4>
										</div>
										<div class="modal-body">
											
											Are you sure to delete {{ $users->name }}'s details?
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
											<a type="button" href="contacts-delete/{{ $users->id }}" class="btn btn-primary">Yes</a>
										</div>
									</div>
								</div>
							</div>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
