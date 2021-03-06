<!doctype html>
<html>
<head></head>
<body>
<form action="{{ url('registration_post') }}" method="post">
    {{--error message--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{ csrf_field() }}

    <label for="first_name"> First name</label>
    <input type="text" name="first_name" id="first_name">
    <span>{{$errors->first('first_name')}}</span>
    <br>
    <label for="last_name"> Last name</label>
    <input type="text" name="last_name" id="first_name">
    <span>{{$errors->first('last_name')}}</span>
    <br>
    <label for="first_name"> Username</label>
    <input type="text" name="username" id="first_name">
    <span>{{$errors->first('username')}}</span>
    <br>
    <label for="first_name"> Password</label>
    <input type="password" name="password" id="first_name">
    <span>{{$errors->first('password')}}</span>
    <br>
    <input value="Submit" type="submit">
</form>
</body>
</html>
