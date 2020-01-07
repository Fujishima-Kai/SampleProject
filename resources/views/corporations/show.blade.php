<html>
<label for="title">取引先情報更新・変更(ID選択)</label><br>

 <form action="{{action('CorporationController@store')}}" method='post'>
 @csrf

  <p>入力項目</p>
  <ul>
<li>  ID　<input class="form-control" name="id" type="text" id="1" value="{{ $data->id }}"></li><br>
  </ul>
  <div class="form-submit">
             <button type="submit">検索する</button>
           </div>
    </form>
</body>
</html>