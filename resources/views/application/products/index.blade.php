@extends('layouts.app', ['page' => 'products'])

@section('title', __('messages.products'))

@section('page_header')
{{--    <div class="page__heading d-flex align-items-center">--}}
{{--        <div class="flex">--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb mb-0">--}}
{{--                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.products') }}</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--            <h1 class="m-0">{{ __('messages.products') }}</h1>--}}
{{--        </div>--}}
{{--        <a href="{{ route('products.create', ['company_uid' => $currentCompany->uid]) }}" class="btn btn-success ml-3"><i class="material-icons">add</i> {{ __('messages.create_product') }}</a>--}}
{{--    </div>--}}
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">{{ __('messages.products') }}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">{{get_system_setting('application_name')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('products',  ['user_uid' => auth()->user()->uid  , 'company_uid' => Session::get('user_current_company')['uid']]) }}">Product</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('List') }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
            <div class="media width-250 float-right">
                <div class="media-body media-right text-right">
                    <a href="{{ route('products.create', ['user_uid'=> auth()->user()->uid ,'company_uid' => Session::get('user_current_company')['uid']]) }}" class="btn btn-success rounded mt-1 "><i class="ft-plus"></i> {{ __('messages.create_product') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
{{--    @include('application.products._filters')--}}

{{--    <div class="card">--}}
{{--        @include('application.products._table')--}}
{{--    </div>--}}

    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-round-controls">Product List</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="card-text">
                                @include('application.products._filters')
                                <hr>
                            </div>
                            @include('application.products._table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
