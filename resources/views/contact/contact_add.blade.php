@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">

				<div class="panel-heading">Contact Add</div>

				<div class="panel-body">
				{!! Form::open(array( 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>


<div class="form-group">
    {!! Form::submit('Add!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
