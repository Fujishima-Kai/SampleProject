<html>
<label for="title">取引先情報更新・変更</label><br>

 <form action="{{ url('corporation/edit'.$data->id)}}" method='post'>
 
 @csrf
 
  <p>入力項目</p>
  <ul>
<li>  取引先名　<input class="form-control" name="name" type="text" value="{{ $data->name }}"></li>
<li>  住所　　　<input class="form-control" name="address" type="text" value="{{ $data->address }}"></li>
<li>  電話番号　<input class="form-control" name="phone_number" type="text" value="{{ $data->phone_number }}"></li>
<li>  E-Mail　  <input class="form-control" name="email" type="text" value="{{ $data->email }}"></li>
  </ul>
  <div class="form-submit">
             <button type="submit">更新する</button>
           </div>
    </form>
</body>
</html>
