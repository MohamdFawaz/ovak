@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.projects')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.projects') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-1">
                        <a href="{{route('project.create')}}">
                            <button type="button" class="btn btn-block bg-gradient-primary">Create</button>
                        </a>
                    </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>{{ __('admin.property.id') }}</th>
                        <th>{{ __('admin.property.arabic_name') }}</th>
                        <th>{{ __('admin.property.english_name') }}</th>
                        <th>{{ __('admin.property.image') }}</th>
                        <th>{{ __('admin.property.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $property)
                        <tr>
                            <td>{{ $property->id }}</td>
                            <td>{{ $property->translate('ar')->name ?? "-" }}</td>
                            <td>{{ $property->translate('en')->name ?? "-" }}</td>
                            <td>
                                <img class="img-fluid img-responsive" width="100px" src="{{ $property->image }}"
                                     alt="{{$property->id . '-image'}}"></td>
                            <td class="text-center">
                                <a class="m-2" href="{{route('project.show',$property->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="m-2" href="{{route('project.edit',$property->id)}}">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a class="m-2" onclick="return confirm('are you sure you want to delete this?')"
                                   href="{{route('project.delete',$property->id)}}">
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
                {{ $properties->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection
