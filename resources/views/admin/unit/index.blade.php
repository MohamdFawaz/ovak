@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.units')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.units') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-1">
                        <a href="{{route('unit.create')}}">
                            <button type="button" class="btn btn-block bg-gradient-primary">Create</button>
                        </a>
                    </div>
                </div>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>{{ __('admin.unit.id') }}</th>
                        <th>{{ __('admin.unit.arabic_name') }}</th>
                        <th>{{ __('admin.unit.english_name') }}</th>
                        <th>{{ __('admin.unit.image') }}</th>
                        <th>{{ __('admin.unit.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($units as $unit)
                        <tr>
                            <td>{{ $unit->id }}</td>
                            <td>{{ $unit->translate('ar')->name ?? "-" }}</td>
                            <td>{{ $unit->translate('en')->name ?? "-" }}</td>
                            <td>
                                <img class="img-fluid img-responsive" width="100px" src="{{ $unit->image }}"
                                     alt="{{$unit->id . '-image'}}"></td>
                            <td class="text-center">
                                <a class="m-2" href="{{route('unit.show',$unit->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="m-2" href="{{route('unit.edit',$unit->id)}}">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a class="m-2" onclick="return confirm('are you sure you want to delete this?')"
                                   href="{{route('unit.delete',$unit->id)}}">
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
                {{ $units->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
@endsection
