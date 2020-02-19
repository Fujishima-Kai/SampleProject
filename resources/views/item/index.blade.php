@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <h1>
        <small>出荷商品選択</small>
    </h1>
</section>
@stop

@section('content')

<body>
		<div>
		<div class="input-group input-group hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  	<div class="input-group-btn">
                    	<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  	</div>
                  <a href="/item/add"　class="navbar-brand">ad</a>
				</li>
		</div>
    <div class="container" style="padding-top: 50px">
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
                    <form method="POST" action="{{action('ItemController@chooseQuantity')}}" class="form-inline m-1">
                        {{CSRF_field()}}
                        <label>数量<span class="required"></span></label><br>
                        <input type="number" name="quantity" class="form-control col-md-2 mr-1">
                        <label>納入率<span class="required"></span>（％）</label>
                        <input type="float" name="markup_ratio" class="form-control col-md-2 mr-1">
                        </select>
                        <input type="hidden" name="item_id" value="{{ $item->id}}">
                        <button type="submit" class="btn btn-primary col-md-6">出荷リストに入れる</button>
                    </form>
                    @endauth
                </div>
            </div>
            @endforeach
			<div>
				<button type="submit" style="text-align: center">出荷リストに進む</button>
				@if(Session::has('message'))
					<div class="alert alert-success">
						{{ session('message') }}
					</div>
    			@endif
			</div>
		</div>
        <div class="row justify-content-center">
		{{ $items->appends(['keyword' => Request::get('keyword')])->links() }}
        </div>
    </div>
    
</body>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
