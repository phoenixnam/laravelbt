<!DOCTYPE html>
<html>
<head>
	<title>Input Form</title>
</head>
<body>
	<form action='' method="post" style="with:600px; margin-left:500px;">
        @csrf
		<label for="name">Name:</label><br>
		<input type="text" class="from-control" id="name"  name="name"><br>

		<label for="age">Age:</label><br>
		<input type="number" class="from-control" id="age" name="age"><br>

		<label for="date">Date:</label><br>
		<input type="date" class="from-control" id="date" name="date"><br>

		<label for="phone">Phone:</label><br>
		<input type="tel" class="from-control" id="phone" name="phone"><br>

		<label for="web">Web:</label><br>
		<input type="url" class="from-control" id="web" name="web"><br>

		<label for="address">Address:</label><br>
		<textarea id="address"class="from-control"  name="address"></textarea><br>

		<input type="submit" class="btn btn-primary" value="OK">
        <div> @include ('block.error')</div>
        <div  class="display-infor">
            @if (isset($user))
            <p> Name: {{$user['name']}}</p>
            <p> Age: {{$user['age']}}</p>
            <p> Date: {{$user['date']}}</p>
            <p> Phone: {{$user['phone']}}</p>
            <p> Web: {{$user['web']}}</p>
            <p> Address: {{$user['address']}}</p>
            @endif
        </div>
	</form>
</body>
</html>