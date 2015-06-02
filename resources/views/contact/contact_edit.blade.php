
@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Contact Add</div>
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>

				<div class="panel-body">
					
					{!! Form::model($result, array('action' => array('contacts@update',$result->id) , 'class' => 'form')) !!}

					<div class="form-group">
						{!! Form::label('Your Name') !!}
						{!! Form::text('name' ,null,
						array('required', 'class' => 'form-control' , 'placeholder' => 'Enter your name'  )) !!}

					</div>

					<div class="form-group">
						{!! Form::label('Your email Address') !!} 
						{!!  Form::text('email',null,
						array('required', 'class' => 'form-control', 'placeholder' => 'Enter your email!')) !!}
					</div>

					


					<div class="form-group">
						{!! Form::submit('Update!', 
						array('class'=>'btn btn-primary')) !!}
					</div>

					{!! Form::close() !!}


				</div>
			</div>
		</div>
	</div>
</div>
@endsection

