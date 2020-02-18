@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<html>
    <h1>
        <small>新規取引先登録</small>
    </h1>
@stop

@section('content')
<body>
      <form action="{{action('CorporationController@store')}}" method='post'>
      @csrf

      <ul>
            <li>
                  取引先名<input class="form-control" name="name" type="text" id="title">
            </li><br>
                  @if ($errors->first('name'))
                        <p class="validation">※{{$errors->first('name')}}</p>
                  @endif
            <li>
                  住所<input class="form-control" name="address" type="text" id="title">
            </li><br>
                  @if ($errors->first('address'))
                        <p class="validation">※{{$errors->first('address')}}</p>
                  @endif
            <li>
                  電話番号<input class="form-control" name="phone_number" type="text" id="title">
            </li><br>
                  @if ($errors->first('phone_number'))
                        <p class="validation">※{{$errors->first('phone_number')}}</p>
                  @endif
            <li>
                  メールアドレス<input class="form-control" name="email" type="text" id="title">
            </li><br>
                  @if ($errors->first('email'))
                        <p class="validation">※{{$errors->first('email')}}</p>
                  @endif
      </ul>
      <div style="display:inline-flex">
          <form>
            <div class="form-submit">
               <button type="submit" class="btn btn-primary btn-sm">登録する</button><br>
            </div>
          </form>
      <form action="{{ action('CorporationController@index')}}" method='get'>
            @csrf
            <button type="submit" class="btn btn-block btn-default btn-sm">一覧に戻る</button>
      </form>
      </div>
</body>
</html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
