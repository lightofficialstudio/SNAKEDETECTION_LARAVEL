@extends('layouts/main')
@section('title', 'วิธีปฐมพยาบาล')
@section('content')
    <div class="app-wrapper d-flex" id="kt_app_wrapper">
        <!--begin::Sidebar-->

        <!--end::Sidebar-->
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
                        <!--begin::Toolbar container-->
                        <div class="d-flex flex-stack flex-row-fluid">
                            <!--begin::Toolbar container-->
                            <div class="d-flex flex-column flex-row-fluid">
                                <!--begin::Toolbar wrapper-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-3">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                        <a href="../../demo41/dist/index.html" class="text-white text-hover-primary">
                                            <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                                        </a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <i class="ki-outline ki-right fs-5 text-gray-700 mx-n1"></i>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboards</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bolder fs-2qx flex-column justify-content-center my-0">
                                        Call Center</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Toolbar container-->

                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-fluid">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Card widget 3-->
                                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                                    style="background-color: #F1416C;background-image:url('assets/media/svg/shapes/wave-bg-red.svg')">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5 mb-3">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                            style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                                            <i class="ki-outline ki-whatsapp text-white fs-2qx lh-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end mb-3">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <span class="fs-4hx text-white fw-bold me-6">191</span>
                                            <div class="fw-bold fs-6 text-white">
                                                <span class="d-block">Police</span>
                                                <span class="">Calls</span>
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Card footer-->
                                    <div class="card-footer"
                                        style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                        <!--begin::Progress-->
                                        <div class="fw-bold text-white py-2">
                                            <span class="fs-1 d-block">935</span>
                                            <span class="opacity-50">Problems Solved</span>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Card footer-->
                                </div>
                                <!--end::Card widget 3-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <!--begin::Card widget 3-->
                                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                                    style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5 mb-3">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                            style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                                            <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end mb-3">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <span class="fs-4hx text-white fw-bold me-6">427</span>
                                            <div class="fw-bold fs-6 text-white">
                                                <span class="d-block">Outbound</span>
                                                <span class="">Calls</span>
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Card footer-->
                                    <div class="card-footer"
                                        style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                        <!--begin::Progress-->
                                        <div class="fw-bold text-white py-2">
                                            <span class="fs-1 d-block">386</span>
                                            <span class="opacity-50">Generated Leads</span>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Card footer-->
                                </div>
                                <!--end::Card widget 3-->
                            </div>
                            <!--end::Col-->

                        </div>
                        <!--end::Row-->



                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->


        @endsection
