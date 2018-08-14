@extends('emails.contactForm.contactAdmin')

@section('content')
	<h1>Hello, Admin!</h1>
	<p>You have new message!</p>
	<br>
	<p>User name: {{ $contact->name }}</p>
	<p>User email: {{ $contact->email }}</p>
	@if( $contact->phone)
		<p>User phone: {{ $contact->phone }}</p>
	@endif
	<b>Message:</b>
	<p>{{ $contact->message }}</p>
@endsection	


