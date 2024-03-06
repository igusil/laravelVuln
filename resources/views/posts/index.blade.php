<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <center>
    <div>

      @foreach($posts as $post)

        <div style="display:flex; flex:row; justify-content:center; align-items:center;">
          <h5> Titulo: {{$post->title}}</h5>
          <div>
            @if($post->user->id == Auth::user()->id)
            <form action="/posts/{{$post->id}}" method="POST">
              @csrf
              @method( 'DELETE')
              <button type="submit">Deletar Post</button>
            </form>
            @endif
          </div>
        </div>
        <div>
          <pre>Conteúdo: {{$post->body}}</pre>
        </div>
        <div>
          <small>Autor: {{$post->user->name}}</small>
        </div>
      @endforeach
    </div>

  </center>

</body>
</html>