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
                    <h3 class="card-title">Edit {{$property->name}} Project</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('project.update',$property->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="districtId">District</label>
                            <select id="districtId" class="form-control select" name="district_id" required>
                                <option value="" class="form-control">Choose District</option>
                                @foreach($districts as $district)
                                    <option value="{{$district->id}}" {{ ($district->id == $property->district_id) ? 'selected' : '' }} class="form-control">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="propertyTypesId">Property Type</label>--}}
{{--                            <select id="propertyTypesId" class="form-control select" name="property_type_id" required>--}}
{{--                                <option value="" class="form-control">Choose Property Type</option>--}}
{{--                                @foreach($propertyTypes as $type)--}}
{{--                                    <option value="{{$type->id}}"  {{ ($type->id == $property->property_type_id) ? 'selected' : '' }} class="form-control">{{$type->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="developmentCompanyId">Development Company</label>
                            <select id="developmentCompanyId" class="form-control select" name="development_company_id"
                                    required>
                                <option value="" class="form-control">Choose Development Company</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}" {{ ($company->id == $property->development_company_id) ? 'selected' : '' }} class="form-control">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="finishTypeId">Finish Type</label>--}}
{{--                            <select id="finishTypeId" class="form-control select" name="finish_type_id" required>--}}
{{--                                <option value="" class="form-control">Choose Finish Type</option>--}}
{{--                                @foreach($finishTypes as $type)--}}
{{--                                    <option value="{{$type->id}}" {{ ($type->id == $property->finish_type_id) ? 'selected' : '' }} class="form-control">{{$type->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label for="unitTypeId">Unit Type</label>
                            <select id="unitTypeId" class="form-control select" name="unit_type_id" required>
                                <option value="" class="form-control">Choose Unit Type</option>
                                @foreach($unitTypes as $type)
                                    <option value="{{$type->id}}"  {{ ($type->id == $property->unit_type_id) ? 'selected' : '' }} class="form-control">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="area">Google Map Link</label>
                            <input type="text" required name="google_map_link" class="form-control" id="area"
                                   value="{{$property->google_map_link}}"
                                   placeholder="Enter Google Map Link">
                        </div>
                        <div class="form-group">
                            <label for="deliveryDate">Delivery Date</label>
                            <input type="date" value="{{$property->delivery_date}}" required name="delivery_date" class="form-control" id="deliveryDate">
                        </div>
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" required name="arabic_name" class="form-control" id="arabicName"
                                   value="{{ $property->translate('ar')->name }}"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="englishName">English Name</label>
                            <input type="text" required name="english_name" class="form-control" id="englishName"
                                   value="{{ $property->translate('en')->name }}"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="arabicDescription">Arabic Description</label>
                            <textarea required name="arabic_description" class="form-control" rows="5"
                                      id="arabicDescription">{{$property->translate('ar')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="englishDescription">English Description</label>
                            <textarea required name="english_description" class="form-control" rows="5"
                                      id="englishDescription">{{$property->translate('en')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="arabicAddress">Arabic Address</label>
                            <textarea required name="arabic_address" class="form-control" rows="5"
                                      id="arabicAddress">{{$property->translate('ar')->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="englishAddress">English Address</label>
                            <textarea required name="english_address" class="form-control" rows="5"
                                      id="englishAddress">{{$property->translate('en')->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <img class="img-fluid img-responsive mt-2" width="100px" src="{{ $property->image }}" alt="{{$property->id . '-image'}}">
                        </div>
                        <h4>Amenities <a onclick="addMoreAmenity()"><i class="fa fa-plus"></i></a></h4>
                        <div id="amenities-files" class="row">
                            @if(count($property->amenity))
                                @foreach($property->amenity as $amenity)
                                <div class="form-group col-6">
                                    <label>Image</label>
                                    <a onclick="return confirm('are you sure you want to delete?')" href="{{route('project.delete.amenity',$amenity->id)}}">
                                        <i class="fa fa-trash text-dark ml-2"></i>
                                    </a>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="amenities_files[{{$amenity->id}}][image][]" class="custom-file-input">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                    <img class="img-fluid img-responsive mt-2" width="100px" src="{{ $amenity->image }}" alt="{{$amenity->id . '-image'}}">
                                </div>
                                <div class="form-group col-3">
                                    <label>Arabic Amenity Name</label>
                                    <input type="text" required name="amenities_files[{{$amenity->id}}][name][ar][]" class="form-control"
                                           placeholder="Enter Name"
                                           value="{{$amenity->translate('ar')->name}}">
                                </div>
                                <div class="form-group col-3">
                                    <label>English Amenity Name</label>
                                    <input type="text" required name="amenities_files[{{$amenity->id}}][name][en][]" class="form-control"
                                           value="{{$amenity->translate('en')->name}}"
                                           placeholder="Enter Name">
                                </div>
                                @endforeach
                            @else
                            <div class="form-group col-6">
                                <label>Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" required name="amenities_files[image][]" class="custom-file-input">
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
                            @endif
                        </div>
                        <h5>Utilities</h5>
                        @foreach($utilities as $utility)
                            <div class="form-check">
                                <input @if($property->utility->where('utility_id',$utility->id)->first()) checked @endif type="checkbox" class="form-check-input clearfix" value="{{$utility->id}}" name="utilities[]">
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
                        @foreach($property->gallery as $image)
                        <img class="img-fluid img-responsive mt-2" width="100px" src="{{ $image->image }}" alt="{{$image->id . '-image'}}">
                            <a onclick="return confirm('are you sure you want to delete?')" href="{{route('project.delete.image',$image->id)}}">
                                <i class="fa fa-trash text-dark ml-2"></i>
                            </a>
                        @endforeach
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
