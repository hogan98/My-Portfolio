<p>
	Hi There
</p>

<p>
	The following contact form was submitted, with the following details:
</p>

<p>
	<strong>Name:</strong> {{ $data['name'] }}
</p>

<p>
	<strong>Email Address:</strong> <a href="mailto:{{ $data['email'] }}">{{  $data['email'] }}</a>
</p>

<p>
	<strong>Message:</strong><br>
	{!! nl2br( $data['message'] ) !!}
</p>
