@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Contact Listings</div>

				<div class="panel-body">
					<a href="{{ url('/contacts-add') }}"><button  class="btn btn-primary">Add Contacts</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
