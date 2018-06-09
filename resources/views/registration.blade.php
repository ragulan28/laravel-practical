<!doctype html>
<html>
<head></head>
<body>
<form action="{{ url('registration_post') }}" method="post">
    {{ csrf_field() }}

    <label for="first_name"> First name</label>
    <input type="text" name="first_name" id="first_name">
    <br>
    <label for="last_name"> Last name</label>
    <input type="text" name="last_name" id="first_name">
    <br>
    <label for="first_name"> Username</label>
    <input type="text" name="username" id="first_name">
    <br>
    <label for="first_name"> Password</label>
    <input type="password" name="password" id="first_name">
    <br>
    <input value="Submit" type="submit">
</form>
</body>
</html>
