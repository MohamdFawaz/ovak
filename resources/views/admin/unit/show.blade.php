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
                    <h3 class="card-title">Edit Unit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('unit.update',$unit->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('post')}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="projectId">Project</label>
                            <select readonly id="projectId" class="form-control select" name="project_id" required>
                                <option value="" class="form-control">Choose Project</option>
                                @foreach($projects as $project)
                                    <option value="{{$project->id}}" class="form-control" @if($project->id == $unit->project_id) selected @endif >{{$project->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="finishTypeId">Finish Types</label>
                            <select readonly id="finishTypeId" class="form-control select text-dark" multiple="multiple" name="finish_type_ids[]" required>
                                <option value="" class="form-control" >Choose Finish Types</option>
                                @foreach($finishTypes as $type)
                                    <option value="{{$type->id}}" class="form-control" @if($unit->finishType->where('finish_type_id',$type->id)->first())
                                    selected @endif>{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="unitTypeId">Unit Type</label>
                            <select readonly id="unitTypeId" class="form-control select" name="unit_type_id" required>
                                <option value="" class="form-control">Choose Unit Type</option>
                                @foreach($unitTypes as $type)
                                    <option value="{{$type->id}}" @if($unit->unit_type_id == $type->id) selected @endif class="form-control">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="area">Area</label>
                            <input readonly type="number"  required name="area" class="form-control" id="area"
                                   value="{{$unit->area}}"
                                   placeholder="Enter unit area">
                        </div>
                        <h5>Unit Price</h5>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="from_price">From</label>
                                <input readonly type="number" value="{{$unit->from_price}}" required name="from_price" class="form-control" id="from_price">
                            </div>
                            <div class="form-group col-6">
                                <label for="to_price">To</label>
                                <input readonly type="number" value="{{$unit->to_price}}" required name="to_price" class="form-control" id="to_price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="arabicName">Arabic Name</label>
                            <input type="text" readonly required name="arabic_name" class="form-control" id="arabicName"
                                   value="{{$unit->translate('ar')->name}}"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="englishName">English Name</label>
                            <input type="text" readonly required name="english_name" class="form-control" id="englishName"
                                   value="{{$unit->translate('en')->name}}"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="arabicDescription">Arabic Description</label>
                            <textarea required readonly name="arabic_description" class="form-control" rows="5"
                                      id="arabicDescription">{{$unit->translate('ar')->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="englishDescription">English Description</label>
                            <textarea required readonly name="english_description" class="form-control" rows="5"
                                      id="englishDescription">{{$unit->translate('en')->description}}</textarea>
                        </div>
                        <label>Properties</label>
                        <div class="form-group row">
                            @foreach($properties as $property)
                                <label class="col-6">{{$property->name}}</label>
                                <input type="text" readonly name="properties[{{$property->id}}]"
                                       class="form-control col-6 mt-2"
                                       placeholder="Enter {{$property->name}}"
                                       value="{{$unit->property->where('property_id',$property->id)->first()->value ?? ""}}">
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <img class="img-fluid img-responsive mt-2" width="100px" src="{{ $unit->image }}" alt="{{$unit->id . '-image'}}">
                        </div>
                        <div class="form-group">
                            <label>Unit Gallery Images</label>
                        </div>
                        @foreach($unit->gallery as $image)
                            <img class="img-fluid img-responsive mt-2" width="100px" src="{{ $image->image }}" alt="{{$image->id . '-image'}}">
                            <a onclick="return confirm('are you sure you want to delete?')" href="{{route('unit.delete.image',$image->id)}}">
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
                height: '200px',
                theme: "classic",
                disabled: true
            });
        });
    </script>
@endsection
