@extends('app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Contact Listings</div>

				<div class="panel-body">
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
						
							
								<?php 
							foreach ($user as $users)
										{	
											echo '<tr>';
										    echo '<tr><td>' . ($users->id) .'</td>';
										    echo '<td>' . ($users->name) .'</td>';
										   echo '<td>' .($users->email) .'</td>';
										   echo '<td> <a href="contacts-edit/'.($users->id).'" >
										    <button class="btn btn-primary">edit</button></td>';
										    echo '<td> <a href="contacts-delete/'.($users->id).'" >
										    <button class="btn btn-primary">delete</button></td>';
										   echo '</tr>';

										}
							?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
