@extends('layouts/main')
@section('title', 'ตรวจสอบชนิดงู')
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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">โปรไฟล์</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bolder fs-2qx flex-column justify-content-center my-0">
                                        [ชื่อของงู] - </h1>
                                    <h3
                                        class="page-heading d-flex text-dark fw-bolder fs-1qx flex-column justify-content-center my-0">
                                        &nbsp;[ENGLISH NAME]</h3>
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
                        <div class="container">
                            <div class="d-flex">

                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                    <div class="col-md-5">
                                        <h2>รูปภาพนำเข้า</h2><br />

                                        <div class="border border-2 d-flex justify-content-center">
                                            <img src="" alt="snake-original-check" width="900px" height="400px">
                                        </div>
                                    </div>

                                    <div class="col-md-7">


                                        <div>
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-light">ลักษณะเด่น</div>
                                                        <!--end::Badge-->
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <i class="ki-solid ki-gear fs-2"></i>

                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Title-->
                                                    <div class="mb-2">
                                                        <b href="#"
                                                            class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">[หัวข้อ]</b>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">[ข้อความ]</div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-light">ถิ่นที่อยู่อาศัย</div>
                                                        <!--end::Badge-->
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <i class="ki-solid ki-map fs-2"></i>

                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Title-->
                                                    <div class="mb-2">
                                                        <b href="#"
                                                            class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">[หัวข้อ]</b>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">[ข้อความ]</div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-light">อาหาร</div>
                                                        <!--end::Badge-->
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <i class="ki-solid ki-focus fs-2"></i>

                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Title-->
                                                    <div class="mb-2">
                                                        <b href="#"
                                                            class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">[หัวข้อ]</b>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">[ข้อความ]</div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-light">พฤติกรรม</div>
                                                        <!--end::Badge-->
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <i class="ki-solid ki-graph fs-2"></i>

                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Title-->
                                                    <div class="mb-2">
                                                        <b href="#"
                                                            class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">[หัวข้อ]</b>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">[ข้อความ]</div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-light">สถานภาพปัจจุบัน</div>
                                                        <!--end::Badge-->
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <i class="ki-solid ki-information-3 fs-2"></i>

                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Title-->
                                                    <div class="mb-2">
                                                        <b href="#"
                                                            class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">[หัวข้อ]</b>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">[ข้อความ]</div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-light">แหล่งอ้างอิง</div>
                                                        <!--end::Badge-->
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <i class="ki-solid ki-question fs-2"></i>

                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Title-->
                                                    <div class="mb-2">
                                                        <b href="#"
                                                            class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">[หัวข้อ]</b>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">[ข้อความ]</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end::Row-->




                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->


        @endsection
