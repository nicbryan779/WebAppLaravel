<!DOCTYPE html>
<html>
<head>
  <title>Laravel Exercise</title>
</head>
<body>
  <form method="post" action="/updateData/{{ $user->id }}">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="{{$user->name}}" value="{{$user->name}}" required><br>
    <input type="text" name="email" placeholder="{{$user->email}}" value="{{$user->email}}" required><br>
    <input type="password" name="password" placeholder = "password" value="{{$user->password}}" required><br>
    <button type="submit">Submit</button>
</body>
</html>
