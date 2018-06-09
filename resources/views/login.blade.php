<!doctype html>
<html>
<head></head>
<body>
<form action="{{ url('login_post') }}" method="post">
    {{ csrf_field() }}

    <label for="username"> Username</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password"> Password</label>
    <input type="password" name="password" id="password">
    <br>
    <input value="Login" type="submit">
</form>
</body>
</html>
