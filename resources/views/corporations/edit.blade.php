@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<html>
   <h1>
        <small>取引先情報更新・変更</small>
    </h1>
@stop

@section('content')
      <body>
      <form action="{{ url('corporation/edit'.$data->id)}}" method='post'>
            @csrf
            <ul class="list-group">
                  <li class="list-group-item"> 
                        取引先名<input class="form-control" name="name" type="text" value="{{ $data->name }}">
                  </li>
                  @if ($errors->first('name'))
                        <p class="validation">※{{$errors->first('name')}}</p>
                  @endif
                  <li class="list-group-item">
                        住所<input class="form-control" name="address" type="text" value="{{ $data->address }}">
                  </li>
                  @if ($errors->first('address'))
                        <p class="validation">※{{$errors->first('address')}}</p>
                  @endif
                  <li class="list-group-item">
                        電話番号　<input class="form-control" name="phone_number" type="text" value="{{ $data->phone_number }}">
                  </li>
                  @if ($errors->first('phone_number'))
                        <p class="validation">※{{$errors->first('phone_number')}}</p>
                  @endif
                  <li class="list-group-item">
                        E-Mail<input class="form-control" name="email" type="text" value="{{ $data->email }}">
                  </li>
                  @if ($errors->first('email'))
                        <p class="validation">※{{$errors->first('email')}}</p>
                  @endif
            </ul>
            <div style="display:inline-flex">
                  <form>
                        <div class="form-submit">
                              <button type="submit" class="btn btn-primary btn-sm">更新する</button><br>
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



