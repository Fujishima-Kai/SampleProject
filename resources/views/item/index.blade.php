@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand">出荷商品選択</a><br>
  <a href="/item/add"　class="navbar-brand">商品追加</a>
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
                        <form action="{{ action('CorporationController@backToList')}}" method='post'>
                          @csrf
                        <button type="submit">選択</button>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center">
            {{ $items->links() }}
        </div>
    </div>
    <form action="{{ action('CorporationController@backToList')}}" method='post'>
  @csrf
    <button type="submit">一覧に戻る</button>
    </form>
</body>
@endsection
