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
                    <h3 class="card-title">Edit Development Company</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('development.update',$company->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" required name="arabic_name" class="form-control" id="arabicName" placeholder="Enter Name" value="{{$company->translate('ar')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="arabicDescription">Arabic Description</label>
                            <textarea required name="arabic_description" class="form-control" id="arabicDescription">{{$company->translate('ar')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="englishName">English Name</label>
                            <input type="text" required name="english_name" class="form-control" id="englishName" placeholder="Enter Name" value="{{$company->translate('en')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="englishDescription">English Description</label>
                            <textarea required name="english_description" class="form-control" id="englishDescription">{{$company->translate('en')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <img class="img-fluid img-responsive mt-2" width="100px" src="{{ $company->image }}" alt="{{$company->id . '-image'}}">
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
