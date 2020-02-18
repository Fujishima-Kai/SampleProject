
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <h3>
	取引先リスト
    </h3>
</section>
@stop

@section('content')
	<div class="col-xs-12">
        <div class="box">
              <div class="box-tools">
			  <nav class="navbar">
                <div class="input-group input-group hidden-xs" style="width: 150px;">

                <form method="GET" action="CorporationController@index">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  	<div class="input-group-btn">
                    	<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  	</div>
                    </form>
				  <a class="nav-link" href="/corporations/create">新規登録</a>
                </div>
				</nav>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
			  <thead>
								<tr>
									<th>取引先名</th>
									<!-- <th>住所</th>
									<th>電話番号</th> -->
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
                                @foreach($corporations as $c)
                            <tr>
                                    <td>{{$c->name}}</td>
                                    <!-- <td>{{$c->address}}</td>
                                    <td>{{$c->phone_number}}</td>
                                    <td>{{$c->email}}</td> -->
                                    <td>
                                        <a href="/corporations/show{{$c->id}}" class="btn btn-success btn-sm">詳細</a>
                                    </td>
                                    <td>
                                        <a href="/corporation/edit{{$c->id}}" class="btn btn-primary btn-sm">編集</a>
                                    </td>
                                    <td>
                                    <form method="post" action="{{ url('corporation/delete'.$c->id)}}">
                                    <!-- {{ csrf_field() }} -->
                                    <input type="submit" value="削除" class="btn btn-danger btn-sm" onclick='return confirm("本当に削除しますか？");'>
                                    </form>
                                    </td>
                            </tr>
                                @endforeach
							</tbody>
				</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

