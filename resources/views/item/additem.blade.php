
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
		body {
			padding-top: 50px;
			background-color: lightgray;
		}

		.starter-template {
			padding: 40px 15px;
			background-color: white;
		}
	</style>
</head>
<body>

<label for="title">商品登録</label><br>
 <form action="{{action('ItemController@store')}}" method='post'>
 @csrf

  <p>入力項目</p>
  <ul>
<li>  品番　<input class="form-control" name="number" type="text" id="title"></li><br>
<li>  品名　　　<input class="form-control" name="name" type="text" id="title"></li><br>
<li>  サイズ　<input class="form-control" name="size" type="text" id="title"></li><br>
<li>  カラー　  <input class="form-control" name="color" type="text" id="title"></li><br>
<li>  金額  <input class="form-control" name="amount" type="text" id="title"></li><br>
  </ul>
  <div class="form-submit">
             <button type="submit">登録する</button>
           </div>
    </form>
    <form action="{{ action('CorporationController@backToList')}}" method='post'>
  @csrf
    <button type="submit">一覧に戻る</button>
    </form>
</body>
</html>
