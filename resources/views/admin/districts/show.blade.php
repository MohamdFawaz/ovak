@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.districts')])
        <div class="card container">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.districts') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Show District</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" readonly name="arabic_name" class="form-control" id="arabicName" placeholder="Enter Name" value="{{$district->translate('ar')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="englishName">English Name</label>
                            <input type="text" readonly name="english_name" class="form-control" id="englishName" placeholder="Enter Name" value="{{$district->translate('en')->name}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
