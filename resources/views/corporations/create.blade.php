
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
@if ($errors->first('name'))
      <p class="validation">※{{$errors->first('name')}}</p>
@endif
<li>  住所　　　<input class="form-control" name="address" type="text" id="title"></li><br>
@if ($errors->first('address'))
      <p class="validation">※{{$errors->first('address')}}</p>
@endif
<li>  電話番号　<input class="form-control" name="phone_number" type="text" id="title"></li><br>
@if ($errors->first('phone_number'))
      <p class="validation">※{{$errors->first('phone_number')}}</p>
@endif
<li>  メールアドレス　  <input class="form-control" name="email" type="text" id="title"></li><br>
@if ($errors->first('email'))
      <p class="validation">※{{$errors->first('email')}}</p>
@endif
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
