@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.users_consultations')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.sidebar.users_consultations') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Mobile</th>
                        <th>First Project</th>
                        <th>Second Project</th>
                        <th>Property Type</th>
                        <th>District</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user_consultations as $user_consultation)
                    <tr>
                        <td><a target="_blank" href="{{url('admin/users')}}">{{$user_consultation->user->name}}</a></td>
                        <td>{{$user_consultation->user->phone ?? ""}}</td>
                        <td>{{$user_consultation->firstProject ? $user_consultation->firstProject->name : ""}}</td>
                        <td>{{$user_consultation->secondProject ? $user_consultation->secondProject->name : ""}}</td>
                        <td>{{$user_consultation->propertyType ? $user_consultation->propertyType->name : ""}}</td>
                        <td>{{$user_filter->district->name ?? ""}}</td>
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
