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
                    <h3 class="card-title">Show Property</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="districtId">District</label>
                            <select id="districtId" class="form-control select" name="district_id" required>
                                <option value="" class="form-control">Choose District</option>
                                @foreach($districts as $district)
                                    <option value="{{$district->id}}"
                                            class="form-control" {{ ($district->id == $property->district_id) ? 'selected' : '' }}>{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="propertyTypesId">Property Type</label>
                            <select id="propertyTypesId" class="form-control select" name="property_type_id" required>
                                <option value="" class="form-control">Choose Property Type</option>
                                @foreach($propertyTypes as $type)
                                    <option value="{{$type->id}}"
                                            class="form-control" {{ ($type->id == $property->property_type_id) ? 'selected' : '' }}>{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="developmentCompanyId">Development Company</label>
                            <select id="developmentCompanyId" class="form-control select" name="development_company_id"
                                    required>
                                <option value="" class="form-control">Choose Development Company</option>
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}"
                                            class="form-control" {{ ($company->id == $property->development_company_id) ? 'selected' : '' }}>{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="finishTypeId">Finish Type</label>
                            <select id="finishTypeId" class="form-control select" name="finish_type_id" required>
                                <option value="" class="form-control">Choose Finish Type</option>
                                @foreach($finishTypes as $type)
                                    <option value="{{$type->id}}"
                                            class="form-control" {{ ($type->id == $property->finish_type_id) ? 'selected' : '' }}>{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="unitTypeId">Unit Type</label>
                            <select id="unitTypeId" class="form-control select" name="unit_type_id" required>
                                <option value="" class="form-control">Choose Unit Type</option>
                                @foreach($unitTypes as $type)
                                    <option value="{{$type->id}}"
                                            class="form-control" {{ ($type->id == $property->unit_type_id) ? 'selected' : '' }}>{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="area">Area</label>
                            <input type="number" required  readonly name="area" class="form-control" id="area"
                                   placeholder="Enter Area" value="{{$property->area}}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" required readonly name="price" class="form-control" id="price"
                                   placeholder="Enter Price" value="{{$property->price}}">
                        </div>
                        <div class="form-group">
                            <label for="deliveryDate">Delivery Date</label>
                            <input type="date" required readonly name="delivery_date" class="form-control" id="deliveryDate"
                                   value="{{$property->delivery_date}}">
                        </div>
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" required readonly name="arabic_name" class="form-control" id="arabicName"
                                   placeholder="Enter Name" value="{{$property->translate('ar')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="englishName">English Name</label>
                            <input type="text" required readonly name="english_name" class="form-control" id="englishName"
                                   placeholder="Enter Name" value="{{$property->translate('en')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="arabicDescription">Arabic Description</label>
                            <textarea required name="arabic_description" readonly class="form-control" rows="5"
                                      id="arabicDescription">{{$property->translate('ar')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="englishDescription">English Description</label>
                            <textarea required name="english_description" readonly class="form-control" rows="5"
                                      id="englishDescription">{{$property->translate('en')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <img class="img-fluid img-responsive mt-2" width="100px" src="{{ $property->image }}" alt="{{$property->id . '-image'}}">
                        </div>
                    </div>
                    <!-- /.card-body -->
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('.select').select2({
                height: '200px',
                disabled: true
            });
        });
    </script>
@endsection
