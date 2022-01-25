@extends('dashboard::layout.main')

@section('pageHead')
<title>{{ __('employee::header.title') }} | Sengine</title>
<meta name="description"
content="put description here" />
<meta name="keywords"
content="put key words here" />
@endsection

@section('pageStyle')
<link href="{{ asset('/themes/metro8/assets/plugins/datatables/datatables.bundle.css') }}" rel="stylesheet"
    type="text/css">
@endsection

@section('page_title')
<!--begin::Page title-->
<div data-kt-swapper="true" data-kt-swapper-mode="prepend"
    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_header_nav'}"
    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
    <!--begin::Title-->
    <h1 class="d-flex align-items-center fw-bolder fs-3 my-1 toolbar-main-title-color">{{ __('employee::header.title') }}</h1>
    <!--end::Title-->
</div>
<!--end::Page title-->
@endsection

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl container-full-width">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div id="header-container" class="card-header border-0 pt-6">
                <x-dashboard::dt-search dt-target="_datatable"/>
               
                     <!--begin::Card toolbar-->
                     <x-dashboard::dt-toolbar dt-target="_datatable">

                        @can('employee.actions.add')
                        <!--begin::Add-->
                        <x-dashboard::dt-add-btn dt-target="_datatable" data-action-url="{{ route('employee.create') }}"/>
                        <!--end::Add-->
                        @endcan
    
                        @can('employee.actions.view_trash')
                        <!--begin::Trashed-->
                        <x-dashboard::dt-trash-btn dt-target="_datatable" data-action-url="{{ route('employee.trashed.datatable') }}"/>
                        <!--end::Trashed-->
                        @endcan
    
                        @can('employee.actions.view_trash')
                        <!--begin::Previous-->
                        <x-dashboard::dt-prv-btn dt-target="_datatable" data-action-url="{{ route('employee.datatable') }}"/>
                        <!--end::Previous-->
                        @endcan
    
                        @can('employee.actions.export')
                        <!--begin::Export-->
                        <x-dashboard::dt-export dt-target="_datatable"/>
                        <!--end::Export-->
                        @endcan
    
                        <!--begin::ColumnFilter-->
                        <x-dashboard::dt-col-filter dt-target="_datatable"/>
                        <!--end::ColumnFilter-->
    
                        <!--begin::Refresh-->
                        <x-dashboard::dt-refresh dt-target="_datatable"/>
                        <!--end::Refresh-->
    
                        <!--begin::FullScrn-->
                        <x-dashboard::dt-full-scrn dt-target="_datatable"/>
                        <!--end::FullScrn-->
    
                        <!--begin::Group actions-->
                        <x-slot name="group">
                            <!--begin::Input group-->
                            <x-dashboard::dt-actn-grp>
                                @can('employee.actions.delete')
                                <x-dashboard::dt-actn-grp-delete data-action-url="{{ route('employee.destroy.many') }}" />
                                @endcan
                            </x-dashboard::dt-actn-grp>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            @can('employee.actions.view_trash')
                            <x-dashboard::dt-trashed-actn-grp>
                                @can('employee.actions.restore')
                                <x-dashboard::dt-actn-grp-restore data-action-url="{{ route('employee.trashed.restore.many') }}" />
                                @endcan
    
                                @can('employee.actions.hard_delete')
                                <x-dashboard::dt-actn-grp-delete data-action-url="{{ route('employee.trashed.destroy.many') }}" />
                                @endcan
                            </x-dashboard::dt-trashed-actn-grp>
                            @endcan
                            <!--end::Input group-->
                        </x-slot>
                        <!--end::Group actions-->
                    </x-dashboard::dt-toolbar>
                    <!--end::Card toolbar-->

            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->

                <x-dashboard::data-table id="_datatable" data-url="{{ route('employee.datatable') }}" 
                    data-order='[[ 1, "desc" ]]' data-page-length='25'>

                  
                    <th>
                        {{ __('employee::datatable.headers.name') }}
                    </th>

                    <th>
                        {{ __('employee::datatable.headers.phone') }}
                    </th>

                    <th>
                        {{ __('employee::datatable.headers.email') }}
                    </th>

              
                    <th>
                        {{ __('employee::datatable.headers.company') }}
                    </th>


                    <th>
                        {{ __('employee::datatable.headers.creation_date') }}
                    </th>
                    
                </x-dashboard::data-table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
@endsection


@section('extras')
<!--begin::Scrolltop-->
@include('dashboard::layout.partials.scrollup')
<!--end::Scrolltop-->
<x-dashboard::dt-modal/>
@endsection

@section('pageScripts')

<script src="{{asset('/themes/metro8/assets/plugins/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/js/bundle/datatable.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/js/bundle/modal_form_validation.js')}}"></script>
<script src="{{asset('/themes/metro8/assets/modules/employee/js/employee.js')}}"></script>

<script src="{{asset('/themes/metro8/assets/js/bundle/dt_media_query.js')}}"></script>


@endsection