@extends('app')



@section('content')

<h3>
	GuestBook Page
</h3>

<div id="guestbook">
	
	<form method="POST" v-on="submit: onSubmitForm">
	
		
		<div class="form-group">
			<label for="name">
				Name:
				<span class="error" v-if="! newMessage.name">*</span>
			</label>
			<input type="text" name="name" id="name" class="form-control" v-model="newMessage.name">
		</div>
		

		
		<div class="form-group">
			<label for="message">
				Message:
				<span class="error" v-if="! newMessage.message">*</span>
			</label>
			<textarea type="text" name="message" id="message" class="form-control" v-model="newMessage.message"></textarea>
		</div>
		
		
		
		<div class="form-group" v-if="! submitted">
			<button type="submit" class="btn btn-default" v-attr="disabled: errors">Sign Guestbook</button>
		</div>
		
		<div class="alert alert-success" v-if="submitted">
			Thanks!
		</div>
		
		
	</form>
	
	<article v-repeat="messages">
		
		<h3>@{{ name }}</h3>
		<div class="body">@{{ message }}</div>
		
	</article>
	
	<pre>@{{ $data | json }}</pre>
	
</div>



@endsection