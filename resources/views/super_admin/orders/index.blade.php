@extends('layouts.app', ['page' => 'super_admin.orders'])

@section('title', __('messages.orders'))

@section('page_header')
{{--    <div class="page__heading d-flex align-items-center">--}}
{{--        <div class="flex">--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb mb-0">--}}
{{--                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.orders') }}</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--            <h1 class="m-0">{{ __('messages.orders') }}</h1>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title text-uppercase">{{ __('messages.orders') }}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{get_system_setting('application_name')}}</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="{{ route('super_admin.orders') }}">{{ __('messages.orders') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('messages.orders') }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')


    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-round-controls">Order List</h4>
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
                            <div class="card">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Your All Invoice is here. Filter for specific invoice</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="tab-content px-1 pt-1">
                                                @include('super_admin.orders._table')
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{--                                <div class="card-header bg-white p-0">--}}
                                {{--                                    <div class="row no-gutters flex nav">--}}
                                {{--                                        <a href="{{ route('invoices', ['tab' => '', 'company_uid' => $currentCompany->uid]) }}" class="col-2 border-right dashboard-area-tabs__tab card-body text-center {{ $tab == 'drafts' ? 'active' : '' }}">--}}
                                {{--                                            <span class="card-header__title m-0">--}}
                                {{--                                                {{ __('messages.drafts') }}--}}
                                {{--                                            </span>--}}
                                {{--                                        </a>--}}
                                {{--                                        <a href="{{ route('invoices', ['tab' => 'due', 'company_uid' => $currentCompany->uid]) }}" class="col-2 border-right dashboard-area-tabs__tab card-body text-center {{ $tab == 'due' ? 'active' : '' }}">--}}
                                {{--                                            <span class="card-header__title m-0">--}}
                                {{--                                                {{ __('messages.due_invoices') }}--}}
                                {{--                                            </span>--}}
                                {{--                                        </a>--}}
                                {{--                                        <a href="{{ route('invoices', ['tab' => 'all', 'company_uid' => $currentCompany->uid]) }}" class="col-2 border-right dashboard-area-tabs__tab card-body text-center {{ $tab == 'all' ? 'active' : '' }}">--}}
                                {{--                                            <span class="card-header__title m-0">--}}
                                {{--                                                {{ __('messages.all_invoices') }}--}}
                                {{--                                            </span>--}}
                                {{--                                        </a>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <div class="card">--}}
{{--        @include('super_admin.orders._table')--}}
{{--    </div>--}}
@endsection
