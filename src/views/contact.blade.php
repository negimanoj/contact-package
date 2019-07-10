<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1>Contact us anytime</h1>
	<form action="{{route('contact')}}" method="post">
		{{csrf_field()}}
		<div class="form-group">
			<label class="control-label">Name</label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Contact</label>
			<input type="text" name="contact" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Subject</label>
			<input type="text" name="subject" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label">Message</label>
			<textarea name="message" class="form-control"></textarea>
		</div>
		<div class="form-group">
			
			<button class="btn btn-primary" type="submit">Submit</button>
		</div>
		
	</form>
</div>
</body>
</html>