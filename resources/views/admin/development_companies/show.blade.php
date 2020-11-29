@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.development_companies')])
        <div class="card container">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.development_companies') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Show Development Company</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" readonly name="arabic_name" class="form-control" id="arabicName" placeholder="Enter Name" value="{{$company->translate('ar')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="arabicDescription">Arabic Description</label>
                            <textarea readonly name="arabic_description" class="form-control" id="arabicDescription">{{$company->translate('ar')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="englishName">English Name</label>
                            <input type="text" readonly name="english_name" class="form-control" id="englishName" placeholder="Enter Name" value="{{$company->translate('en')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="englishDescription">English Description</label>
                            <textarea readonly name="english_description" class="form-control" id="englishDescription">{{$company->translate('en')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <img class="img-fluid img-responsive mt-2" width="100px" src="{{ $company->image }}" alt="{{$company->id . '-image'}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
