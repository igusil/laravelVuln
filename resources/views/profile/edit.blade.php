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
      <small>{{ Auth::user()->name }}, Você está editando o seu perfil</small>
      
      <form action="/profile/update" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

        Nome: <input type="text" name="name" value="{{ Auth::user()->name }}">
        <br/>
        <br/>
        E-mail: <input type="email" name="email" value="{{ Auth::user()->email }}">
        <br/>
        <br/>
        Upload da foto: <input type="file" name="photo_path"> <!-- Corrigido o atributo name aqui -->
        <br/>
        <br/>
        <input type="submit" value="Atualizar perfil">      
      </form>
  </center>

</body>
</html>