@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.finish_types')])
        <div class="card container">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.finish_types') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Finish Types</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('finishType.update',$finish_type->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" required name="arabic_name" class="form-control" id="arabicName" placeholder="Enter Name" value="{{$finish_type->translate('ar')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="englishName">English Name</label>
                            <input type="text" required name="english_name" class="form-control" id="englishName" placeholder="Enter Name" value="{{$finish_type->translate('en')->name}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>


            <!-- /.card-body -->
        </div>
    </div>
@endsection
