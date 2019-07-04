<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <table class = "table table-sm">
        <thead>
<th>ID группы</th>
<th>Описание</th>
<th>Оценка по русскому</th>
<th>Оценка по математике</th>
<th>Оценка по английскому</th>


        </thead>
<tbody>
<tr>
    @foreach ($groups as $group )
              <tr>
              <td><div class = "body">{{$group->title}}</div></td>
              <td><div class = "body">{{$group->description}}</div></td>
              <td><div class = "body">{{$group->average_math}}</div></td>
              <td><div class = "body">{{$group->average_rus}}</div></td>
              <td><div class = "body">{{$group->average_eng}}</div></td>
             
 

</tr>
@endforeach
</tr>
        </tbody>
    </table>
</body>
</html>