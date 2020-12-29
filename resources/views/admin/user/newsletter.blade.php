@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.user_newsletter_subscription')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ __('admin.breadcrumb.user_newsletter_subscription') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="box box-info container">
                <div class="box-header with-border">
                    <h3 class="box-title">Send Newsletter</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{route('user.newsletter.send')}}">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="subject" class="col-sm-2 control-label">Newsletter Subject</label>

                            <div class="col-sm-10">
                                <input type="text" required class="form-control" name="subject" id="subject" placeholder="Newsletter email subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email_content" class="col-sm-2 control-label">Newsletter Content</label>

                            <div class="col-sm-10">
                                <textarea name="email_content" required class="form-control" id="email_content"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Send</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($newsletters as $newsletter)
                    <tr>
                        <td>{{$newsletter->email}}</td>
                        <td>{{$newsletter->created_at}}</td>
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
