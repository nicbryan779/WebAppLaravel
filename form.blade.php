<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Testing</title>
  </head>
  <body>
    <form method="post" action="/register">
      {{ csrf_field() }}
      <input type="text" name="name" placeholder="name" required><br>
      <input type="text" name="email" placeholder="email" required><br>
      <input type="password" name="password" placeholder = "password" required><br>
      <button type="submit">Submit</button>
  </body>
</html>
