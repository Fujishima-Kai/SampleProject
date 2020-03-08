@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <h1>
         受注管理
        <small></small>
    </h1>
</section>
@stop

@section('content')
<body>
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-primary"><i class="fas fa-arrow-circle-left"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">受注</span>
                <span class="info-box-number">
                  10
                  <small>件</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info"><i class="fas fa-tshirt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">在庫手配中</span>
                <span class="info-box-number">
                １
                <small>件</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning"><i class="fas fa-truck"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">出荷待機</span>
                <span class="info-box-number">
                １
                <small>件</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger"><i class="fas fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">請求書未発行</span>
                <span class="info-box-number">
                １
                <small>件</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
<<div class="wrapper">
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
									<th>受注日</th>
									 <th>取引先名</th>
									<th>指定納期</th> 
									<th>status</th>
									<th>備考</th>
								</tr>
							</thead>
							<tbody>
                  <tr>
                    <td>2020/3/1</td>
                    <td>A商事</td>
                    <td>2020/3/20</td>
                    <td><small class="badge badge-danger"><i class="far fa-file"></i> 請求書未発行</small></td>
                    <td>メーカー直送</td>
                  </tr>
                  <tr>
                    <td>2020/2/3</td>
                    <td>B社</td>
                    <td>2020/3/18</td>
                    <td><small class="badge badge-info"><i class="far fa-tshirt"></i>在庫手配中</small></td>
                    <td>_</td>
                  </tr>
                  <tr>
                    <td>2020/3/1</td>
                    <td>株式会社C</td>
                    <td>2020/3/20</td>
                    <td><small class="badge badge-warning"><i class="far fa-truck"></i>出荷待機</small></td>
                    <td>バッグ同送</td>
                  </tr>
                  <tr>
                    <td>2020/3/1</td>
                    <td>Dコーポレーション</td>
                    <td>2020/3/20</td>
                    <td><small class="badge badge-success"><i class="far fa-check-circle"></i> 完了</small></td>
                    <td>メーカー直送</td>
                  </tr>
                  <tr>
                    <td>2020/3/1</td>
                    <td>Eコンツェルン</td>
                    <td>2020/3/20</td>
                    <td><small class="badge badge-primary"><i class="far fa-arrow-circle-left"></i> 受注</small></td>
                    <td>_</td>
                  </tr>
                  <tr>
                    <td>2020/3/1</td>
                    <td>F.インターナショナル</td>
                    <td>2020/3/20</td>
                    <td><small class="badge badge-secondary"><i class="far fa-ban"></i> キャンセル</small></td>
                    <td>_</td>
                  </tr>
							</tbody>
				</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	</div>
   </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/admin-lte/css/adminlte.css">
    
@stop

@section('js')
    <!-- jQuery -->
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>  
 
@stop