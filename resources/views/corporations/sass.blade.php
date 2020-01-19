<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sass</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1 class="text">エラーが発生しました</h1>
</body>
<form action="{{ action('CorporationController@backToList')}}" method='post'>
  @csrf
    <button type="submit">一覧に戻る</button>
    </form>
</body>
</html>
</html>