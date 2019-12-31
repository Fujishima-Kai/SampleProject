<label for="title">新規取引先作成</label><br>

  <body>
  <p>入力項目</p>
  <ul>
<li>  ID　　　　<input class="form-control" name="title" type="text" id="title"></li><br>
<li>  取引先名　<input class="form-control" name="title" type="text" id="title"></li><br>
<li>  住所　　　<input class="form-control" name="title" type="text" id="title"></li><br>
<li>  電話番号　<input class="form-control" name="title" type="text" id="title"></li><br>
<li>  E-Mail　  <input class="form-control" name="title" type="text" id="title"></li><br>
  </ul>
  <div class="form-submit">
             <button type="submit">登録する</button>
           </div>
</body>
</html>



@section('corporation.create')

    <form action='http://localhost:8080/corporation' method='post'>
        {{ csrf_field() }}
            ID：<input type='text' name='id'><br>
            取引先名：<input type='text' name='name'><br>
            住所：<input type='text' name='address'><br>
            電話番号：<input type='text' name='phone_number'><br>
            E-Mail：<input type='text' name='content'><br>
            <input type='submit' value='新規登録'>
    </form>
@endsection
