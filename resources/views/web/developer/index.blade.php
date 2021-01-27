@extends('web.layout')

@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.developers')}}</title>
@endsection

@section('pre_header_content')
    <div class="h-75 w-100 d-flex justify-content-center align-items-center">
        <h2 class="white-color"> {{__('front.header.developers')}} <span class="header-line"></span></h2>
    </div>
@endsection

@section('content')
    @include('web.partials.inner_pages_header')
    <section class="container py-5 developer-page">
        <div class="container-fluid mt-5">
            <div class="row">
                @foreach($development_companies as $company)
                <div class="col-sm-3 my-3">
                    <a href="{{route('developer.page',$company->slug)}}">
                        <div class="developer-image">
                            <img src="{{$company->image}}" alt="{{$company->slug}}'-developer-image'" />
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
