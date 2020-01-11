<html>
<label for="title">取引先情報更新・変更</label><br>

 <form action="{{action('CorporationController@update')}}" method='post'>
 @csrf

  <p>入力項目</p>
  <ul>
<li>  ID　<input class="form-control" name="id" type="text" id="1" value="{{ $data->id }}"></li><br>
<li>  取引先名　<input class="form-control" name="name" type="text" id="2" value="{{ $data->name }}"></li><br>
<li>  住所　　　<input class="form-control" name="address" type="text" id="3" value="{{ $data->address }}"></li><br>
<li>  電話番号　<input class="form-control" name="phone_number" type="text" id="4" value="{{ $data->phone_number }}"></li><br>
<li>  E-Mail　  <input class="form-control" name="email" type="text" id="5" value="{{ $data->email }}"></li><br>
  </ul>
  <div class="form-submit">
             <button type="submit">更新する</button>
           </div>
    </form>
</body>
</html>