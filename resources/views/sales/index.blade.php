@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <h1>
        Corporation
        <small>Control panel</small>
    </h1>
</section>
@stop

@section('content')
<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 303px; width: 446px;" height="378" width="557"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="../../bower_components/chart.js/Chart.js"></script>
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop