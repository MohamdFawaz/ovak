@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $users_count }}</h3>

                                <p>Users</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{url('/admin/users')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$developers_count}}</h3>

                                <p>Developers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{route('development.index')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$projects_count}}</h3>

                                <p>Projects</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="{{route('project.index')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$units_count}}</h3>

                                <p>Units</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{route('unit.index')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $user_askings_count }}</h3>

                                <p>User Asking's</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="{{route('user.askings')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$user_calculation_count}}</h3>
                                <p>User Calculations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{route('user.calculation.log')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$user_consultation_count}}</h3>

                                <p>User Consultations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$user_newsletters}}</h3>

                                <p>Newsletter Subscribes</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{route('user.newsletter')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Online Store Visitors</h3>
                                    <a href="javascript:void(0);">View Report</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="d-flex flex-column">
                                        <span class="text-bold text-lg">820</span>
                                        <span>Visitors Over Time</span>
                                    </p>
                                    <p class="ml-auto d-flex flex-column text-right">
                                        <span class="text-success">
                                          <i class="fas fa-arrow-up"></i> 12.5%
                                        </span>
                                        <span class="text-muted">Since last week</span>
                                    </p>
                                </div>
                                <!-- /.d-flex -->

                                <div class="position-relative mb-4">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="visitors-chart" height="200" width="461" class="chartjs-render-monitor"
                                            style="display: block; width: 461px; height: 200px;"></canvas>
                                </div>

                                <div class="d-flex flex-row justify-content-end">
                                <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i> This Week
                                </span>
                                <span>
                                    <i class="fas fa-square text-gray"></i> Last Week
                                </span>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- DIRECT CHAT -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Latest Filters</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Property Type</th>
                                            <th>District</th>
                                            <th>Development Company</th>
                                            <th>Unit Type</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($latest_user_filers as $user_filter)
                                            <tr>
                                                <td><a target="_blank"
                                                       href="{{url('admin/users')}}">{{$user_filter->user->name}}</a>
                                                </td>
                                                <td>{{$user_filter->propertyType->name ?? ""}}</td>
                                                <td>{{$user_filter->district->name ?? ""}}</td>
                                                <td>{{$user_filter->developer->name ?? ""}}</td>
                                                <td>{{$user_filter->unitType->name ?? ""}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All
                                    Filters</a>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!--/.direct-chat -->

                    </section>
                    <!-- /.Left col -->

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
