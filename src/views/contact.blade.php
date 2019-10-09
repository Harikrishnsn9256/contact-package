<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Contact Us anytime</h1>


	<form method="post" action="{{route('contact')}}" >
		{{csrf_field()}}
		<input type="text" name="name" placeholder="Your Name">

		<input type="email" name="email" placeholder="Your valid email">

		<textarea name="message" cols="30" rows="10" placeholder="YourQuery"></textarea>

		<input type="submit"  value="submit">
	</form>

</body>
</html>