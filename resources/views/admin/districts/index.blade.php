@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.districts')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.districts') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-1">
                        <a href="{{route('district.create')}}">
                        <button type="button" class="btn btn-block bg-gradient-primary">Create</button>
                        </a>
                    </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>{{ __('admin.districts.id') }}</th>
                        <th>{{ __('admin.districts.arabic_name') }}</th>
                        <th>{{ __('admin.districts.english_name') }}</th>
                        <th>{{ __('admin.districts.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($districts as $district)
                        <tr>
                            <td>{{ $district->id }}</td>
                            <td>{{ $district->translate('ar')->name ?? "-" }}</td>
                            <td>{{ $district->translate('en')->name ?? "-" }}</td>
                            <td class="text-center">
                                <a class="m-2" href="{{route('district.show',$district->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="m-2" href="{{route('district.edit',$district->id)}}">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a class="m-2" onclick="return confirm('are you sure you want to delete this?')" href="{{route('district.delete',$district->id)}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="box-footer clearfix" style="margin-left: 20px ">
                    {{ $districts->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--    <script>--}}
    {{--        $(function () {--}}
    {{--            $("#example1").DataTable({--}}
    {{--                "responsive": true,--}}
    {{--                "autoWidth": false,--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
