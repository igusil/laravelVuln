<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
  </head>
  <body>
    <center>
      <h2>
        crie o seu post
      </h2>
      <form action="/posts" method="POST">
        @csrf
        <input type="text" name="title" palceholder="Seu titulo" />

        <br/>

        <textarea name="body" cols="30" rows="10"></textarea>
        <br/>

        <input name="user_id" type="hidden" value="{{Auth::user()->id}}">

        <input type="submit" value="criar POST" />

      </form> 
    </center>
  </body>
</html>