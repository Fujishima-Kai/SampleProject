@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <div class="wrapper">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion"></i>
                  <div class="col-xs-12">
                <h1>
                    売上管理
                </h1></div>
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
               
              </div>
            </div>
</section>
@stop

@section('content')
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">
        <small>半期進捗</small>
      </h3>
    </div>
  <div class="box-body">
    <canvas id="myBarChart"></canvas>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
          <script>
            var ctx = document.getElementById("myBarChart");
            var myBarChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ['２月', '３月', '４月', '５月', '６月', '７月'],
                datasets: [
                  {
                    label: '本年',
                    data: [620, 650, 930, 850, 510, 660, 470],
                    backgroundColor: "#00c0ef"
                  },{
                    label: '予算',
                    data: [550, 450, 730, 750, 410, 450, 580],
                    backgroundColor: "#d2d6de"
                  },{
                    label: '前年',
                    data: [330, 450, 620, 550, 310, 450, 380],
                    backgroundColor: "grey"
                  }
                ]
              },//'', '', '', '', '', ''
              options: {
                title: {
                  display: true,
                  text: '本年予実'
                },
                scales: {
                  yAxes: [{
                    ticks: {
                      suggestedMax: 1000,
                      suggestedMin: 0,
                      stepSize: 100,
                      callback: function(value, index, values){
                        return  value +  '（千円）'
                      }
                    }
                  }]
                },
              }
            });
          </script>
    </div>
  </div>
          <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
              <small>売上計上履歴</small>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-6"> 
                    <div class="dataTables_length">
                        <label>表示<select name="example1_length" aria-controls="example1" class="form-control input">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select>件</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div　class="dataTables_filter">
                      <label><i class="fa fa-search"></i><input type="search" class="form-control input-sm">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                  <table class="table table-bordered table-striped dataTable">
                      <thead>
                      <tr role="row">
                          <th style="width: 201.375px;">受注日</th>
                          <th style="width: 247.46875px;">取引先名</th>
                          <th style="width: 219.09375px;">売上高</th>
                          <th style="width: 172.53125px;">計上日</th>
                          <th style="width: 123.578125px;">請求書発行</th></tr>
                      </thead>
                      <tbody>           
                        <tr role="row" class="odd">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td><a href="/sales/create">未発行</a></td>
                        </tr><tr role="row" class="even">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>発行済み</td>
                        </tr><tr role="row" class="odd">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>未発行</td>
                        </tr><tr role="row" class="even">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>未発行</td>
                        </tr><tr role="row" class="odd">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>未発行</td>
                        </tr><tr role="row" class="even">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>未発行</td>
                        </tr><tr role="row" class="odd">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>未発行</td>
                        </tr><tr role="row" class="even">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>未発行</td>
                        </tr><tr role="row" class="odd">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>未発行</td>
                        </tr><tr role="row" class="even">
                            <td>2020/3/8</td>
                            <td>A商事</td>
                            <td>9000000</td>
                            <td>2020/3/9</td>
                            <td>未発行</td>
                        </tr>
                      </tbody>
                  </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="../../bower_components/chart.js/Chart.js"></script>
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop