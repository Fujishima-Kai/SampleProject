
<html>
<label for="title">新規取引先作成</label><br>
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
  <body>
 <form action="{{action('CorporationController@store')}}" method='post'>
 @csrf

  <p>入力項目</p>
  <ul>
<li>  取引先名　<input class="form-control" name="name" type="text" id="title"></li><br>
<li>  住所　　　<input class="form-control" name="address" type="text" id="title"></li><br>
<li>  電話番号　<input class="form-control" name="phone_number" type="text" id="title"></li><br>
<li>  E-Mail　  <input class="form-control" name="email" type="text" id="title"></li><br>
  </ul>
  <div class="form-submit">
             <button type="submit">登録する</button>
           </div>
    </form>
    <a href="http://127.0.0.1:8000/corporation"><button type="submit">一覧に戻る</button></a>
</body>
</html>
