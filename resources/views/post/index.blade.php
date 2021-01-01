<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>Post's List</h1>
    <table>
        <caption>Lista de post en español</caption>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Ver más</th>
            </tr>
        </thead>
        <tbody>
            @foreach($postList as $pl)
                <tr>
                    <td>{{$pl->title}}</td>
                    <td><a href="{{route('post.show',$pl->id)}}">Detales</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
</body>
</html>