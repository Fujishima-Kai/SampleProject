
<html>
<body>
<label for="title">新規取引先作成</label><br>

 <form action="{{action('CorporationController@store')}}" method='post'>
 @csrf
  <body>
  <p>入力項目</p>
  <ul>
<li>  ID　　　　<input class="form-control" name="id" type="text" id="title"></li><br>
<li>  取引先名　<input class="form-control" name="name" type="text" id="title"></li><br>
<li>  住所　　　<input class="form-control" name="address" type="text" id="title"></li><br>
<li>  電話番号　<input class="form-control" name="phone_number" type="text" id="title"></li><br>
<li>  E-Mail　  <input class="form-control" name="email" type="text" id="title"></li><br>
  </ul>
  <div class="form-submit">
             <button type="submit">登録する</button>
           </div>
    </form>
</body>
</html>
