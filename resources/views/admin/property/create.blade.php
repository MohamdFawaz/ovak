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
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.property')])
        <div class="card container">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.property') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Property</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label for="propertyTypesId">Property Type</label>
                            <select id="propertyTypesId" class="form-control select" name="property_type_id" required>
                                <option value="" class="form-control">Choose Property Type</option>
                                @foreach($propertyTypes as $type)
                                    <option value="{{$type->id}}" class="form-control">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
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
                        <div class="form-group">
                            <label for="finishTypeId">Finish Type</label>
                            <select id="finishTypeId" class="form-control select" name="finish_type_id" required>
                                <option value="" class="form-control">Choose Finish Type</option>
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
                            <input type="number" required name="area" class="form-control" id="area"
                                   placeholder="Enter Area">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" required name="price" class="form-control" id="price"
                                   placeholder="Enter Price">
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
        });
    </script>
@endsection
