<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
  </head>
  <body>
    @include('header')
      <form method="post">
        {{$errors}}
        @csrf
        <h3>Signup</h3>
        <input class="textbox" type="text" name="name" placeholder="Name" autofocus><br>
        <input class="textbox" type="text" name="email" placeholder="Email"><br>
        <input class="textbox" type="text" name="password" placeholder="Password"><br><br>
        <input class="btn" type="submit" value="Signup">
      </form>
  </body>
</html>
