@extends('admin.layout')


@section('content')
    <div class="content-wrapper">
        @include('admin.partials.breadcrumb',['page_header' => __('admin.breadcrumb.development_companies')])
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('admin.list') ." ". __('admin.breadcrumb.development_companies') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-1">
                        <a href="{{route('development.create')}}">
                            <button type="button" class="btn btn-block bg-gradient-primary">Create</button>
                        </a>
                    </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>{{ __('admin.development_companies.id') }}</th>
                        <th>{{ __('admin.development_companies.image') }}</th>
                        <th>{{ __('admin.development_companies.arabic_name') }}</th>
                        <th>{{ __('admin.development_companies.english_name') }}</th>
                        <th>{{ __('admin.development_companies.number_of_projects') }}</th>
                        <th>{{ __('admin.development_companies.number_of_user_interactions') }}</th>
                        <th>{{ __('admin.development_companies.actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td><img class="img-fluid img-responsive" width="100px" src="{{ $company->image }}" alt="{{$company->id . '-image'}}"></td>
                            <td>{{ $company->translate('ar')->name ?? "-" }}</td>
                            <td>{{ $company->translate('en')->name ?? "-" }}</td>
                            <td>
                                @foreach($company->project as $project)
                                <a href="{{route('project.show',$project->id)}}" target="_blank">{{ $project->name }}</a><br>
                                @endforeach
                            </td>
                            <td>
                                @foreach($company->project as $project)
                                    {{$project->project_asking ? $project->projectAsking->count() : 0}} <br>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <a class="m-2" href="{{route('development.show',$company->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="m-2" href="{{route('development.edit',$company->id)}}">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a class="m-2" onclick="return confirm('are you sure you want to delete this?')" href="{{route('development.delete',$company->id)}}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
{{--            <div class="box-footer clearfix" style="margin-left: 20px ">--}}
{{--                    {{ $companies->links("pagination::bootstrap-4") }}--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

@section('js')
        <script>
            $(function () {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                });
            });
        </script>
@endsection
