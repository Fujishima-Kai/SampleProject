<html>
<label for="title">取引先情報更新・変更</label><br>

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
             <button type="submit">更新する</button>
           </div>
    </form>
</body>
</html>