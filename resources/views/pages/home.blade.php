@extends('app')



@section('content')

<h3>
	Home Page and second
</h3>


{!! Form::open() !!}
	{!! Form::label('name', 'testing forms facade package:') !!}
	{!! Form::text('name') !!}
{!! Form::close() !!}

    <h1 class="page-heading">
        Gulp sass testing   
	</h1>

@endsection