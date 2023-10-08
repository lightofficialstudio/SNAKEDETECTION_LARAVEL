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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">ตรวจสอบชนิดงู</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bolder fs-2qx flex-column justify-content-center my-0">
                                        ตรวจสอบชนิดงู</h1>
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
                                    <div class="col-md-4">
                                        <h2>รูปภาพนำเข้า</h2><br />

                                        <div class="border border-2 d-flex justify-content-center">
                                            <img src="" alt="snake-original-check" width="800px" height="300px">
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <h2>ผลลัพธ์การตรวจสอบ : <b>[ชื่อของงู]</b></h2> <br />

                                        <div class="border border-2 d-flex justify-content-center">
                                            <img src="" alt="snake-original-check" width="800px" height="300px">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end::Row-->
                        <div class="container">
                            <div class="d-flex justify-content-center text-center">
                                <h2>ระดับการทำนาย : &nbsp;</h2>
                                <h1>[86%]</h1>
                            </div>
                            <div class=" border-bottom border-3 p-3 mt-5 mb-5" style="width:100%;"></div>

                            <div class="d-flex justify-content-center text-center mb-5">
                                <h2 class="text-secondary">** การจำแนกด้วยรูปภาพนั้นมีความเสี่ยงในการผิดพลาด
                                    กรณีที่ถูกงูกัด เพื่อความปลอดภัย ควรพาผู้ที่ถูกงูกัดพบแพทย์ทุกครั้ง **</h2>


                            </div>
                            <div class="mt-3 mb-5 text-center">
                                <button class="btn btn-primary btn-lg btn-rounded">ลองอีกครั้ง</button>
                            </div>
                        </div>



                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->


        @endsection
