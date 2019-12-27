<!doctype html>
<html>
<head>
    <title>取引先一覧</title>
</head>
<body>
<h1>CorporationList</h1>
@foreach($corporation as $c)
    <p>{{$c->title}} : {{$c->body}}</p>
@endforeach
</body>
</html>