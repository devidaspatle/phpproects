@extends('adminlte::page')
<meta name="csrf-token" content="{{ csrf_token() }}">@section('title', 'Zero Diabetes')@section('content')
<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>        Dashboard        <small>Version 2.0</small>      </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">Total Newsletter</span> <span class="info-box-number">{{$count}}</span> </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box"> <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">Total Patient</span> <span class="info-box-number">{{$patientcount}}</span> </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box"> <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">Total Appointment</span> <span class="info-box-number">{{$appointmentCount}}</span> </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box"> <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">Total Formulas</span> <span class="info-box-number">{{$FormulaCount}}</span> </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- /.box -->
                <!-- TABLE: LATEST ORDERS -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Patient Appointment </h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                       <th>Sr. No.</th>
                                        <th>Centre name</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>  @php
                                          $i = 1
                                        @endphp

                                 @foreach($appointments as $appointment)
                                    <tr>
                                         <td>{{$i++}}</td>
                                          <td>  <?php 

                $centreid = $appointment->centre_id;

                echo $centres = DB::table('centres')->where('id', $centreid)->value('centre_name');

              ?>   </td>
                                        <td>{{$appointment->name}}</td>
                                        <td>{{$appointment->mobile_number}}</td>
                                        <td>{{$appointment->created_at}}</td>
                                    </tr> @endforeach </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix"> <a href="{{ route('patients.index')}}" class="btn btn-sm btn-default btn-flat pull-right">View</a> </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <!-- PRODUCT LIST -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recently  Patient</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i> </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <ul class="products-list product-list-in-box"> @foreach($patients as $patient)
                            <li class="item">
                                <div class="product-img"> {{$patient->patient_name}} </div>
                                <div class="product-info">&nbsp;&nbsp;&nbsp;&nbsp; <a href="javascript:void(0)" class="product-title"> {{$patient->mobile_number}} </a> </div>
                            </li> @endforeach
                            <!-- /.item -->
                        </ul>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-center"> <a href="{{ route('patients.index')}}" class="uppercase">View All Patient</a> </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>@stop