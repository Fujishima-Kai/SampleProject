<html>



  <div class="row">
  <div class="col-md-4 col-md-offset-4">
  <h1>ログイン</h1>

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

  <form action="{{ route('login') }}" method="post">
  <div class="form-group">
  <label for="email">メールアドレス</label>
  <input type="text" id="email" name="email" class="form-control">
  </div>
  @if ($errors->first('email'))
      <p class="validation">※{{$errors->first('email')}}</p>
  @endif

  <div class="form-group">
  <label for="password">パスワード</label>
  <input type="password" id="password" name="password" class="form-control">
  </div>
  @if ($errors->first('password'))
    <p class="validation">※{{$errors->first('password')}}</p>
  @endif


  <button type="submit" class="btn btn-primary">ログイン</button>
  {{ csrf_field() }}
  </form>
  </div>
  </div>
</body>
</html>