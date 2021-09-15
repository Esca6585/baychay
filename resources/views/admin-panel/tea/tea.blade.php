@extends('layouts.admin.admin-template-app')

@section('title')
{{ __('Tea') }}
@endsection

@section('body')

<!--begin::Body-->
<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="index.html" class="brand-logo">
            <img alt="metronic-template/v7/assets/media/logos/logo-light.png"
                src="{{ asset('metronic-template/v7/assets/media/logos/logo-light.png') }}" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="index.html" class="brand-logo">
                        <img alt="metronic-template/v7/assets/media/logos/logo-light.png"
                            src="{{ asset('metronic-template/v7/assets/media/logos/logo-light.png') }}" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                @include('layouts.admin.sidebar')
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                @include('layouts.admin.header')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                        <div
                            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Page Heading-->
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">

                                    </h5>
                                    <!--end::Page Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul
                                        class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                        <li class="breadcrumb-item text-muted">
                                            <a href="{{ route(Route::currentRouteName(), app()->getlocale() ) }}"
                                                class="text-muted">{{ config('app.name') }}</a>
                                        </li>

                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <div class="card-header flex-wrap py-5">
                                    <div class="card-title">
                                        <h3 class="card-label">{{ config('app.name') }}
                                        </h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <a href="{{ route(Request::segment(3) . '.create', app()->getlocale() ) }}"
                                            class="btn font-weight-bolder">
                                            <span class="svg-icon svg-icon-xl">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.25" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.54184 2.36899C4.34504 2.65912 2.65912 4.34504 2.36899 6.54184C2.16953 8.05208 2 9.94127 2 12C2 14.0587 2.16953 15.9479 2.36899 17.4582C2.65912 19.655 4.34504 21.3409 6.54184 21.631C8.05208 21.8305 9.94127 22 12 22C14.0587 22 15.9479 21.8305 17.4582 21.631C19.655 21.3409 21.3409 19.655 21.631 17.4582C21.8305 15.9479 22 14.0587 22 12C22 9.94127 21.8305 8.05208 21.631 6.54184C21.3409 4.34504 19.655 2.65912 17.4582 2.36899C15.9479 2.16953 14.0587 2 12 2C9.94127 2 8.05208 2.16953 6.54184 2.36899Z"
                                                        fill="#12131A" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M12 17C12.5523 17 13 16.5523 13 16V13H16C16.5523 13 17 12.5523 17 12C17 11.4477 16.5523 11 16 11H13V8C13 7.44772 12.5523 7 12 7C11.4477 7 11 7.44772 11 8V11H8C7.44772 11 7 11.4477 7 12C7 12.5523 7.44771 13 8 13H11V16C11 16.5523 11.4477 17 12 17Z"
                                                        fill="#12131A" />
                                                </svg>
                                            </span>
                                        </a>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">

                                        <div class="dataTables_length" id="kt_datatable_length">
                                            <label>
                                                <select id="datatable_length" name="datatable_length"
                                                    aria-controls="kt_datatable"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option class="bs-title-option" value="5"
                                                        {{ $pagination == 5 ? 'selected' : '' }}>5</option>
                                                    <option class="bs-title-option" value="10"
                                                        {{ $pagination == 10 ? 'selected' : '' }}>10</option>
                                                    <option class="bs-title-option" value="15"
                                                        {{ $pagination == 15 ? 'selected' : '' }}>15</option>
                                                    <option class="bs-title-option" value="20"
                                                        {{ $pagination == 20 ? 'selected' : '' }}>20</option>
                                                    <option class="bs-title-option" value="25"
                                                        {{ $pagination == 25 ? 'selected' : '' }}>25</option>
                                                    <option class="bs-title-option" value="50"
                                                        {{ $pagination == 50 ? 'selected' : '' }}>50</option>
                                                    <option class="bs-title-option"
                                                        value="100 {{ $pagination == 100 ? 'selected' : '' }} ">100
                                                    </option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                            <!--begin:Search-->
                                            <div class="quick-search-form">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="search_button">
                                                            <span class="svg-icon svg-icon-lg">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                    </div>

                                                    <input type="search" class="form-control" id="datatable_search"
                                                        placeholder="{{ __('Search') }}...">

                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="search_clear">
                                                            <!--begin::Svg Icon | public/metronic-template/v8/assets/media/icons/duotone/Navigation/Close.svg-->
                                                            <span class="svg-icon svg-icon-lg">
                                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <g id="Group"
                                                                        transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                                        fill="#000000">
                                                                        <rect fill="#000000" id="Rectangle-185" x="0"
                                                                            y="7" width="16" height="2" rx="1"></rect>
                                                                        <rect fill="#000000" id="Rectangle-185-Copy"
                                                                            opacity="0.5"
                                                                            transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) "
                                                                            x="0" y="7" width="16" height="2" rx="1">
                                                                        </rect>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                    </div>


                                    <!--begin::Alert-->
                                    @if(session()->has('success-create'))
                                    <div class="alert alert-fixed alert-custom alert-light-primary fade show mb-5" id="alert-message" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon2-plus text-primary"></i>
                                        </div>
                                        <div class="alert-text">{{ __(session()->get('success-create')) }}</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    @endif

                                    @if(session()->has('success-update'))
                                    <div class="alert alert-fixed alert-custom alert-light-warning fade show mb-5" id="alert-message" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon2-edit text-warning"></i>
                                        </div>
                                        <div class="alert-text">{{ __(session()->get('success-update')) }}</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    @endif
                                    
                                    @if(session()->has('success-delete'))
                                    <div class="alert alert-fixed alert-custom alert-light-danger fade show mb-5" id="alert-message" role="alert">
                                        <div class="alert-icon">
                                            <i class="flaticon-delete text-danger"></i>
                                        </div>
                                        <div class="alert-text">{{ __(session()->get('success-delete')) }}</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="ki ki-close"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    @endif
                                    <!--end::Alert-->
                                    
                                    <!--begin: Datatable-->
                                    <div id="datatable">
                                        <table class="table table-separate table-head-custom table-checkable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    @foreach (Config::get('languages') as $lang => $language)
                                                    <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                                                    @endforeach
                                                    <th>{{ __('Price') }}</th>
                                                    <th>{{ __('Sale Price') }}</th>
                                                    <th>{{ __('Discount') }}</th>
                                                    <th>{{ __('Sale Type') }}</th>
                                                    <th>{{ __('Actions') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($teas as $tea)
                                                <tr id="datatable">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $tea->name_tm }}</td>
                                                    <td>{{ $tea->name_en }}</td>
                                                    <td>{{ $tea->name_ru }}</td>
                                                    <td>
                                                        <span
                                                            class="label label-lg font-weight-bold label-{{ $tea->sale_price ? 'light-danger' : 'light-success' }} label-inline">
                                                            @if($tea->sale_price)
                                                            <del>{{ $tea->price }} {{ __('manat') }}</del>
                                                            @else
                                                            {{ $tea->price }} {{ __('manat') }}
                                                            @endif
                                                        </span>
                                                    </td>
                                                    <td>
                                                        @if($tea->sale_price)
                                                        <span
                                                            class="label label-lg font-weight-bold label-success label-inline">
                                                            {{ $tea->sale_price }} {{ __('manat') }}
                                                        </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tea->discount)
                                                        <span
                                                            class="label label-lg font-weight-bold label-danger label-inline">-{{ __($tea->discount) }}%</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tea->sale_type)
                                                        <span
                                                            class="label label-lg font-weight-bold label-success label-inline">{{ __($tea->sale_type) }}</span>
                                                        @endif
                                                    </td>
                                                    <td>@include('layouts.admin.action')</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <div class="d-flex justify-content-end">
                                            <div>
                                                {{ $teas->links('layouts.admin.pagination') }}
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Datatable-->
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layouts.admin.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::User Panel-->
    @include('layouts.admin.admin-profile')
    <!-- end::User Panel-->
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };

    </script>
    <script src="{{ asset('metronic-template/v7/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('metronic-template/v7/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('metronic-template/v7/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('metronic-template/v7/assets/js/ajax/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('metronic-template/v7/assets/js/ajax/getdata.js') }}"></script>

</body>
<!--end::Body-->
@endsection
