@extends('layouts.app', ['page' => 'customers'])

@section('title', __('messages.create_customer'))

@section('page_header')
{{--    <div class="page__heading d-flex align-items-center">--}}
{{--        <div class="flex">--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb mb-0">--}}
{{--                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>--}}
{{--                    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('customers', ['company_uid' => $currentCompany->uid]) }}">{{ __('messages.customers') }}</a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page">{{ __('messages.update_customer') }}</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--            <h1 class="m-0 h3">{{ __('messages.update_customer') }}</h1>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">{{ __('messages.update_customer')  }}</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{get_system_setting('application_name')}}</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('customers',  ['company_uid' => $currentCompany->uid])}}" >{{ __('messages.customers') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('Update')  }}
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
                        <h4 class="card-title" id="basic-layout-round-controls">User List</h4>
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
                            <div  class="container">
                                <form action="{{ route('customers.update', ['customer' => $customer->id, 'company_uid' => $currentCompany->uid]) }}" method="POST" enctype="multipart/form-data">
                                    @include('layouts._form_errors')
                                    @csrf

                                    @include('application.customers._form')
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
