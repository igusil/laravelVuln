<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar perfil usuario</title>
</head>
<body>
  
  <center>

    <h2>Editando seu perfil</h2>
    <small>{{Auth::user()->name}}, Você está editando o seu perfil</small>
    
    <form action=""/profile/update" method="post">
      @csrf
      <input type="hidden" name="id" value="{{Auth::user->id}}">
      <input type="text" name="name" value="{{Auth::user->name}}">
      <input type="email" name="email" value="{{Auth::user->email}}">
      <!--<input type="password" name="password" value="{{Auth::user->password}}">-->

    </form>

  </center>

</body>
</html>