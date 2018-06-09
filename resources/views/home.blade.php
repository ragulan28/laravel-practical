<html>

<body>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First name</th>
        <th>last name</th>
        <th>username</th>
        <th>Update</th>
    </tr>

    @foreach ($user_data as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->username}}</td>
            <td><a href="{{url('/user_update/'.$user->id)}}">Update</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
