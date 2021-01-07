@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.users_filters')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.sidebar.users_filters') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
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
                    @foreach($user_filters as $user_filter)
                    <tr>
                        <td><a target="_blank" href="{{url('admin/users')}}">{{$user_filter->user->name}}</a></td>
                        <td>{{$user_filter->propertyType->name ?? ""}}</td>
                        <td>{{$user_filter->district->name ?? ""}}</td>
                        <td>{{$user_filter->developer->name ?? ""}}</td>
                        <td>{{$user_filter->unitType->name ?? ""}}</td>
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
