@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.users_asking')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.sidebar.users_askings') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>User Name</th>
                        <th>User Mobile</th>
                        <th>User Email</th>
                        <th>Project Name</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($askings as $asking)
                    <tr>
                        <td>{{$asking->user->name}}</td>
                        <td>{{$asking->user->mobile}}</td>
                        <td>{{$asking->user->email}}</td>
                        <td>{{$asking->project->name}}</td>
                        <td>{{$asking->created_at}}</td>
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
