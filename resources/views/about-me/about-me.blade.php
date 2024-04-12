@extends('layouts/main')
@section('title', 'เกี่ยวกับเรา')

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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">เกี่ยวกับเรา</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bolder fs-2qx flex-column justify-content-center my-0">
                                        เกี่ยวกับเรา</h1>
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
                        <div class="row g-12 d-flex justify-content-center mt-6 mb-6">



                            <div class="col-md-12">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-2 border-dashed p-15 rounded">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->

                                    <!--end::Image-->
                                    <!--begin::Action-->

                                    <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-1">
                                        <!--begin::Title-->
                                        <p href="#"
                                            class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base">
                                            คำอธิบายเว็บไซต์

                                        </p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">

                                            <p>Snakedetection เป็นเว็บไซต์ที่ใช้เทคโนโลยี machine learning
                                                เพื่อช่วยระบุชนิดของงูจากรูปภาพ. ง่ายๆ เพียงแค่อัปโหลดรูป,
                                                ระบบของเราจะทำนายชนิดของงูให้คุณทราบในไม่กี่วินาที.</p>

                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <div class="mt-10 mb-10">
                                <h1 class="text-center">อาจารย์ที่ปรึกษา</h1>
                            </div>
                            <div class="col-md-3">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-3  p-15 rounded border-dashed">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset('project/images/firstaid_0.jpg') }}')">
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Action-->

                                    <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-5">
                                        <!--begin::Title-->
                                        <p href="#"
                                            class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base">
                                            พิชญ์สินี ชุทสนิท</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                            รหัสนักศึกษา 6204062636066
                                            <br>
                                            นักศึกษามหาวิทยาลัยพระจอมเกล้าพระนครเหนือ
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <div class="mt-10 mb-10">
                                <h1 class="text-center">นักศึกษาผู้จัดทำ</h1>
                            </div>
                            <div class="col-md-3">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-3  p-15 rounded border-dashed">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset('project/images/firstaid_0.jpg') }}')">
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Action-->

                                    <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-5">
                                        <!--begin::Title-->
                                        <p href="#"
                                            class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base">
                                            พิชญ์สินี ชุทสนิท</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                            รหัสนักศึกษา 6204062636066
                                            <br>
                                            นักศึกษามหาวิทยาลัยพระจอมเกล้าพระนครเหนือ
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <div class="col-md-3">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-3 p-15 rounded border-dashed">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset('project/images/firstaid_1.jpg') }}')">
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Action-->

                                    <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-5">
                                        <!--begin::Title-->
                                        <p href="#"
                                            class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base">
                                            ชัชชวัล ทักษ์ธนโชติ


                                        </p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                            รหัสนักศึกษา 6204062636066
                                            <br>
                                            นักศึกษามหาวิทยาลัยพระจอมเกล้าพระนครเหนือ
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>

                            <div class="mt-10 mb-10">
                                <h1 class="text-center">ผู้ให้คำแนะนำ</h1>
                            </div>
                            <div class="col-md-3">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-3  p-15 rounded border-dashed">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset('project/images/firstaid_0.jpg') }}')">
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Action-->

                                    <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-5">
                                        <!--begin::Title-->
                                        <p href="#"
                                            class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base">
                                            พิชญ์สินี ชุทสนิท</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                            รหัสนักศึกษา 6204062636066
                                            <br>
                                            นักศึกษามหาวิทยาลัยพระจอมเกล้าพระนครเหนือ
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <div class="col-md-3">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-3  p-15 rounded border-dashed">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset('project/images/firstaid_0.jpg') }}')">
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Action-->

                                    <!--end::Action-->
                                    </a>
                                    <!--end::Overlay-->
                                    <!--begin::Body-->
                                    <div class="mt-5">
                                        <!--begin::Title-->
                                        <p href="#"
                                            class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base">
                                            พิชญ์สินี ชุทสนิท</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                            รหัสนักศึกษา 6204062636066
                                            <br>
                                            นักศึกษามหาวิทยาลัยพระจอมเกล้าพระนครเหนือ
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                        </div>
                        <!--end::Row-->

                        <div class="d-flex justify-content-center mt-6 mb-6">
                            {{-- <button type="button" class="btn btn-primary btn-lg btn-rounded  p-6 m-6 fs-2"
                                data-bs-toggle="modal" data-bs-target="#modal_emergency_call">สายด่วนงู</button> --}}
                        </div>



                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->


        @endsection

        @section('script')
            <script>
                document.getElementById('openCallCenterModal').addEventListener('click', function() {
                    $('#openModalCallCenterById').modal('show');
                });
            </script>
        @endsection
