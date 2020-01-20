<html>
<label for="title">取引先情報更新・変更</label><br>
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
 <form action="{{ url('corporation/edit'.$data->id)}}" method='post'>
 
 @csrf
 
  <p>入力項目</p>
  <ul class="list-group">
<li class="list-group-item">  取引先名　<input class="form-control" name="name" type="text" value="{{ $data->name }}"></li>
@if ($errors->first('name'))
      <p class="validation">※{{$errors->first('name')}}</p>
@endif
<li class="list-group-item">  住所　　　<input class="form-control" name="address" type="text" value="{{ $data->address }}"></li>
@if ($errors->first('address'))
      <p class="validation">※{{$errors->first('address')}}</p>
@endif
<li class="list-group-item">  電話番号　<input class="form-control" name="phone_number" type="text" value="{{ $data->phone_number }}"></li>
@if ($errors->first('phone_number'))
      <p class="validation">※{{$errors->first('phone_number')}}</p>
@endif
<li class="list-group-item">  E-Mail　  <input class="form-control" name="email" type="text" value="{{ $data->email }}"></li>
@if ($errors->first('email'))
      <p class="validation">※{{$errors->first('email')}}</p>
@endif
</ul>
  <div class="form-submit">
             <button type="submit">更新する</button>
           </div>
    </form>
    <form action="{{ action('CorporationController@backToList')}}" method='post'>
  @csrf
    <button type="submit">一覧に戻る</button>
    </form>
</body>
</html>
