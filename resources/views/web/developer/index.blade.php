@extends('web.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection
@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.developers')}}</title>
@endsection
@section('content')

    @include('web.partials.inner_pages_header',['innerContent' => '<div class="header-text">
            <div class="secondery-page-header-ovarlay">
                <h2 class="white-color header-letter-spacing">'.__('front.title.projects').'</h2>
                <h2 class="green-color">'.__('front.header.developers').' <span class="header-line"></span></h2>
            </div>
        </div>'])

    <section id="developers developers-page" class="margin-top-75">
        <div class="container">
            @foreach($development_companies as $company)
            <div class="col-md-3 col-sm-4 col-xs-6">
                <div class="developer-item">
                    <a href="{{route('developer.page',$company->slug)}}">
                        <img src="{{$company->image}}" alt="" />
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <div class="text-center margin-top-25"><a class="gold-color-hovarable" id="show">{{__('front.actions.show_more')}}</a></div>
    <div class="margin-top-75"></div>
@endsection
