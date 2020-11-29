@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.finish_types')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.finish_types') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-1">
                        <a href="{{route('finishType.create')}}">
                        <button type="button" class="btn btn-block bg-gradient-primary">Create</button>
                        </a>
                    </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>{{ __('admin.finish_types.id') }}</th>
                        <th>{{ __('admin.finish_types.arabic_name') }}</th>
                        <th>{{ __('admin.finish_types.english_name') }}</th>
                        <th>{{ __('admin.finish_types.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($finish_types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>{{ $type->translate('ar')->name ?? "-" }}</td>
                            <td>{{ $type->translate('en')->name ?? "-" }}</td>
                            <td class="text-center">
                                <a class="m-2" href="{{route('finishType.show',$type->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="m-2" href="{{route('finishType.edit',$type->id)}}">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a class="m-2" onclick="return confirm('are you sure you want to delete this?')" href="{{route('finishType.delete',$type->id)}}">
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
                    {{ $finish_types->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection
