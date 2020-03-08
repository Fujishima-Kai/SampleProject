
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <h3>
	取引先管理
    </h3>
</section>
@stop

@section('content')
	<div class="col-xs-12">
        <div class="box">
              <div class="box-tools">
			  <nav class="navbar">
              <form method="GET" action="CorporationController@index">
                </div>
				</nav>
                <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>New</h3>

                <p>新規取引先登録</p>
              </div>
              <div class="icon">
                <i class="far fa-plus"></i>
              </div>
              <a href="/corporations/create" class="small-box-footer">登録画面へ進む <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">件</sup></h3>

                <p>既存法人件数</p>
              </div>
              <div class="icon">
                <i class="far fa-building"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>12</h3>

                <p>今期契約目標</p>
              </div>
              <div class="icon">
                <i class="far fa-handshake"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
          <section class="connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion"></i>
                </h3>
                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
                <div class="col-xs-12">
        <div class="box">
              <div class="box-tools">
			  <nav class="navbar">
              <div class="input-group input-group hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  	<div class="input-group-btn">
                    	<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  	</div>
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
                                        <a href="/corporations/show/{{$c->id}}" class="btn btn-outline-info btn-sm">
                                        <i class="far fa-search-plus"></i>詳細</a>
                                    </td>
                                    <td>
                                        <a href="/corporation/edit{{$c->id}}" class="btn btn-outline-primary btn-sm">
                                        <i class="far fa-edit"></i>編集</a>
                                    </td>
                                    <td>
                                    <form method="post" action="{{ url('corporation/delete'.$c->id)}}">
                                    @csrf
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

