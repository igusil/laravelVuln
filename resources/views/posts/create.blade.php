<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
  </head>
  <body>
    <center>
      <form action="/posts" method="POST">
        <input type="text" name="title" palceholder="Seu titulo" />

        <br/>

        <textarea name="body" cols="30" rows="10"></textarea>
        <br/>
        <input type="submit" value="criar POST" />

      </form> 
    </center>
  </body>
</html>