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
      <input type="hidden" name="id" value="{{Auth::user()->id}}">
      <input type="text" name="name" value="{{Auth::user()->name}}">
      <br/>
      <input type="email" name="email" value="{{Auth::user()->email}}">
      <br/>
      <!--<input type="password" name="password" value="{{Auth::user->password}}">-->
      <input type="submit" value="Atualizar perfil">

    </form>

  </center>

</body>
</html>