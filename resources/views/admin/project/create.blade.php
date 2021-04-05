@extends('admin.layout')


@section('content')
    <style>
        .select2-selection__rendered {
            line-height: 31px !important;
        }

        .select2-container .select2-selection--single {
            height: 40px !important;
        }

        .select2-selection__arrow {
            height: 34px !important;
        }
    </style>
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.projects')])
        <div class="card container">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.projects') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Project</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="districtId">District</label>
                            <select id="districtId" class="form-control select" name="district_id" required>
                                <option value="" class="form-control">Choose District</option>
                                @foreach($districts as $district)
                                    <option value="{{$district->id}}" class="form-control">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="propertyTypesId">Property Type</label>--}}
{{--                            <select id="propertyTypesId" class="form-control select" name="property_type_id" required>--}}
{{--                                <option value="" class="form-control">Choose Property Type</option>--}}
{{--                                @foreach($propertyTypes as $type)--}}
{{--                                    <option value="{{$type->id}}" class="form-control">{{$type->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="developmentCompanyId">Development Company</label>
                            <select id="developmentCompanyId" class="form-control select" name="development_company_id"
                                    required>
                                <option value="" class="form-control">Choose Development Company</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}" class="form-control">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="finishTypeId">Finish Type</label>--}}
{{--                            <select id="finishTypeId" class="form-control select" name="finish_type_id" required>--}}
{{--                                <option value="" class="form-control">Choose Finish Type</option>--}}
{{--                                @foreach($finishTypes as $type)--}}
{{--                                    <option value="{{$type->id}}" class="form-control">{{$type->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="unitTypeId">Unit Type</label>--}}
{{--                            <select id="unitTypeId" class="form-control select" name="unit_type_id" required>--}}
{{--                                <option value="" class="form-control">Choose Unit Type</option>--}}
{{--                                @foreach($unitTypes as $type)--}}
{{--                                    <option value="{{$type->id}}" class="form-control">{{$type->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="google-maps-link">Google Map Link</label>
                            <textarea  required name="google_map_link" class="form-control" id="google-maps-link"
                                       placeholder="Enter Google Map Link"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="google-maps-link">Google Map Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="google_map_image" class="custom-file-input" id="google-maps-link">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deliveryDate">Delivery Date</label>
                            <input type="date" required name="delivery_date" class="form-control" id="deliveryDate">
                        </div>
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" required name="arabic_name" class="form-control" id="arabicName"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="englishName">English Name</label>
                            <input type="text" required name="english_name" class="form-control" id="englishName"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="arabicDescription">Arabic Description</label>
                            <textarea required name="arabic_description" class="form-control" rows="5"
                                      id="arabicDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="englishDescription">English Description</label>
                            <textarea required name="english_description" class="form-control" rows="5"
                                      id="englishDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <h4>Amenities <a onclick="addMoreAmenity()"><i class="fa fa-plus"></i></a></h4>
                        <div id="amenities-files" class="row">
                            <div class="form-group col-6">
                                <label>Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="amenities_files[image][]" class="custom-file-input">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-3">
                                <label>Arabic Amenity Name</label>
                                <input type="text" required name="amenities_files[name][ar][]" class="form-control"
                                       placeholder="Enter Name">
                            </div>
                            <div class="form-group col-3">
                                <label>English Amenity Name</label>
                                <input type="text" required name="amenities_files[name][en][]" class="form-control"
                                       placeholder="Enter Name">
                            </div>
                        </div>
                        <h5>Utilities</h5>
                        @foreach($utilities as $utility)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input clearfix" value="{{$utility->id}}" name="utilities[]">
                            <label class="form-check-label">{{ $utility->name }}</label>
                        </div>
                        @endforeach

                        <div class="form-group">
                            <label>Project Gallery Images</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="project_gallery[]" class="custom-file-input" multiple>
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <small>Multiple Files Allowed</small>
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

@section('js')
    <script>
        $(document).ready(function () {
            $('.select').select2({
                height: '200px'
            });
            $('.custom-file-label').prev('input').on('change',function (){
                $(this).next('.custom-file-label').text("File Added")
            });
            let amenitiesFileEl = '<div class="form-group col-6"> '+
                '<label>Image</label>' +
                '<div class="input-group">' +
                '<div class="custom-file"> ' +
                '<input type="file" name="amenities_files[image][]" class="custom-file-input">' +
                '<label class="custom-file-label" for="image">Choose file</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="form-group col-3">' +
                '<label>Arabic Amenity Name</label>' +
                '<input type="text"  name="amenities_files[name][ar][]" class="form-control"' +
                'placeholder="Enter Name">' +
                '</div>' +
                '<div class="form-group col-3">' +
                '<label>English Amenity Name</label>' +
                '<input type="text"  name="amenities_files[name][en][]" class="form-control"' +
                'placeholder="Enter Name">' +
                '</div>' +
                '</div>';

            addMoreAmenity = () =>
            {
                $('#amenities-files').append(amenitiesFileEl);
            }
        });
    </script>
@endsection
