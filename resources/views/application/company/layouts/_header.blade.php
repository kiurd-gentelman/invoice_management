
@if(auth()->user()->hasRole('super_admin'))

    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center" style="background: #461b7ef0;">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.html">
                            @if(get_system_setting('application_logo'))
                                <img class="brand-logo" src="{{ get_system_setting('application_logo') }}" width="125" alt="{{ get_system_setting('application_name') }}">
                                <h3 class="brand-text text-white">{{ get_system_setting('application_name') }}</h3>
                            @else
                                <h3 class="brand-text text-white">{{ get_system_setting('application_name') }}</h3>
                            @endif
                            {{--                            <img class="brand-logo" alt="modern admin logo" src="../../../app-assets/images/logo/logo.png">--}}
                            {{--                            <h3 class="brand-text text-white">Invoice Management</h3>--}}
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container container center-layout">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu text-white"></i></a></li>
{{--                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize text-white"></i></a></li>--}}
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search text-white" href="#"><i class="ficon ft-search text-white"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <span class="mr-1 text-white">Hello,
                                        <span class="user-name text-bold-700 text-white">{{auth()->user()->first_name}}&nbsp{{auth()->user()->last_name}}</span>
                                    </span>
                                <span class="avatar avatar-online">
                                <img src="https://ui-avatars.com/api/?name={{auth()->user()->first_name}}+{{auth()->user()->last_name}}" alt="avatar"><i></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{route('super_admin.users.edit', auth()->user()->id)}}"><i class="ft-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item"href="{{ route('logout') }}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



@else
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center" style="background: #461b7ef0;">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a href="{{route('company-list',['user_uid' => auth()->user()->uid])}}" class="navbar-brand">
                            @if(get_system_setting('application_logo'))
                                <img class="brand-logo" src="https://ui-avatars.com/api/?name={{get_system_setting('application_name')}}" width="125" alt="{{ get_system_setting('application_name') }}">
                                {{--                                <img class="brand-logo" src="{{ get_system_setting('application_logo') }}" width="125" alt="{{ get_system_setting('application_name') }}">--}}
                                <h3 class="brand-text " style="color: white;">{{ get_system_setting('application_name') }}</h3>
                            @else
                                <img class="brand-logo" src="https://ui-avatars.com/api/?name=John+Doe" alt="{{ get_system_setting('application_name') }}">
                                <h3 style="color: white;">{{ get_system_setting('application_name') }}</h3>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container container center-layout">
                <div class="collapse navbar-collapse " id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu text-white"></i></a></li>
{{--                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>--}}
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search text-white"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore Modern...">
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="mr-1" style="color: white;">Hello,
                                    <span class="user-name text-bold-700" style="color: white;">{{auth()->user()->first_name}}&nbsp{{auth()->user()->last_name}}</span>
                                </span>
                                <span class="avatar avatar-online">
                                    <img src="{{ asset(auth()->user()->avatar) }}" alt="avatar"><i></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('settings.account', ['user_uid' => auth()->user()->uid]) }}" ><i class="ft-user"></i> {{ __('messages.account_settings') }}</a>
                                <a class="dropdown-item" href="{{ route('settings.membership', ['user_uid' => auth()->user()->uid]) }}"><i class="ft-mail"></i>{{ __('messages.membership') }}</a>
{{--                                <a class="dropdown-item" href="{{ route('settings.account', ['company_uid' => $currentCompany->uid]) }}"><i class="ft-check-square"></i> {{ __('messages.my_profile') }}</a>--}}
{{--                                <a href="{{ route('settings.account', ['user_uid' => auth()->user()->uid]) }}" class=" nav-link">--}}
{{--                                    <i class="sidebar-menu-icon sidebar-menu-icon--left ft-user" ></i>--}}
{{--                                    <span class="sidebar-menu-text">{{ __('messages.account_settings') }}</span>--}}
{{--                                </a>--}}
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

@endif


