<!doctype html>
<html>
<head></head>
<body>
<form action="{{ url('userDetail_post') }}" method="post">
    {{ csrf_field() }}

    <label for="age"> First name</label>
    <input type="text" name="age" id="age">
    <br>
    <label for="address"> Last name</label>
    <input type="text" name="address" id="address">
    <br>
    <label for="About"> about</label>
    <input type="text" name="about" id="about">

    <br>
    <input value="Submit" type="submit">
</form>
</body>
</html>
