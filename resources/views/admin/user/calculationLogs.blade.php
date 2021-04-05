@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.users_calculation_logs')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.sidebar.users_calculation_logs') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User Mobile</th>
                        <th>Total Amount</th>
                        <th>Down Payment</th>
                        <th>No of years</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($calculations as $calculation)
                    <tr>
                        <td>{{$calculation->user->name}}</td>
                        <td>{{$calculation->user->phone}}</td>
                        <td>{{$calculation->project_total_amount}}</td>
                        <td>{{$calculation->down_payment}}</td>
                        <td>{{$calculation->number_of_years}}</td>
                        <td>{{$calculation->created_at}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
