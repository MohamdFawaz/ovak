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
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.units')])
        <div class="card container">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.units') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Unit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('unit.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="projectId">Project</label>
                            <select id="projectId" class="form-control select" name="project_id" required>
                                <option value="" class="form-control">Choose Project</option>
                                @foreach($projects as $project)
                                    <option value="{{$project->id}}" class="form-control">{{$project->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="finishTypeId">Finish Types</label>
                            <select id="finishTypeId" class="form-control select text-dark" multiple="multiple" name="finish_type_ids[]" required>
                                <option value="" class="form-control" >Choose Finish Types</option>
                                @foreach($finishTypes as $type)
                                    <option value="{{$type->id}}" class="form-control">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="unitTypeId">Unit Type</label>
                            <select id="unitTypeId" class="form-control select" name="unit_type_id" required>
                                <option value="" class="form-control">Choose Unit Type</option>
                                @foreach($unitTypes as $type)
                                    <option value="{{$type->id}}" class="form-control">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="area">Area</label>
                            <input type="number"  required name="area" class="form-control" id="area"
                                   placeholder="Enter unit area">
                        </div>
                        <h5>Unit Price</h5>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="from_price">From</label>
                                <input type="number" required name="from_price" class="form-control" id="from_price">
                            </div>
                            <div class="form-group col-6">
                                <label for="to_price">To</label>
                                <input type="number" required name="to_price" class="form-control" id="to_price">
                            </div>
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
                        <label>Properties</label>
                        <div class="form-group row">
                            @foreach($properties as $property)
                                <label class="col-6">{{$property->name}}</label>
                                <input type="text" name="properties[{{$property->id}}]"
                                       class="form-control col-6 mt-2"
                                       placeholder="Enter {{$property->name}}">
                            @endforeach
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
                        <div class="form-group">
                            <label>Unit Gallery Images</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="unit_gallery[]" class="custom-file-input" multiple>
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
