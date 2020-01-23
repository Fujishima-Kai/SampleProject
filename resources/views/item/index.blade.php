@extends('layouts.app')
@section('content')
@if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    @endif
    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand">出荷商品選択</a><br>
  <a href="/item/add"　class="navbar-brand">ad</a>
</nav>
<body>
    <div class="container">
        <div class="row justify-content-left">
            @foreach ($items as $item)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-header">品番：{{ $item->number }}</div>
                    <div class="card-body">
                        <td>品名：{{ $item->name }}</td><br>
                        <td>サイズ：{{ $item->size }}</td><br>
                        <td>カラー：{{ $item->color }}</td><br>
                        <td>単価：{{ $item->amount }}</td><br>
                    </div>
                    @auth
                    <form method="POST" action="{{action('DeliveryItemController@store')}}" class="form-inline m-1">
                        {{CSRF_field()}}
                        <label>数量<span class="required"></span></label>
                        <input type="number" name="quantity" class="form-control col-md-2 mr-1">
                        </select>
                        <input type="hidden" name="item_id" value="{{ $item->id}}">
                        <button type="submit" class="btn btn-primary col-md-6">出荷リストに入れる</button>
                    </form>
                    @endauth
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            {{ $items->links() }}
        </div>
    </div>
    
    <a href='/corporation'>取引先一覧に戻る</a>
    
</body>
@endsection
