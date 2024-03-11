@extends('layouts/main')
@section('title', 'สาราณุกรมงู')
@section('content')
    <style>
        .header-img {
            position: relative;
            min-height: 70vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            /* เพิ่มคำสั่งนี้ */
        }

        .blurred-bg {
            position: absolute;
            top: -10px;
            /* เพิ่มขอบเขตเล็กน้อย */
            right: -10px;
            bottom: -10px;
            left: -10px;
            background-image: url('{{ asset('project/images/green-albolaris-snake-side-view-animal-closeup-green-viper-snake-closeup-head.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(8px);
            z-index: 0;
        }
    </style>
    <div class="app-wrapper d-flex" id="kt_app_wrapper">
        <!--begin::Sidebar-->

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <section class="header-img d-flex align-items-center justify-content-center">
                <div class="blurred-bg"></div> <!-- นี่คือ div ที่จะแสดงรูปภาพที่เบลอ -->
                <div class="d-flex align-items-center justify-content-center rounded"
                    style="width: 100vh; height:40vh; background-color: rgba(255, 255, 255, 0.5); z-index: 1;">

                    <div class="text-center p-4" style="width: 80%;">
                        <h1 class="text-center fs-3x text-white font-weight-bold text-stroke">เริ่มการค้นหา
                        </h1>


                        <div class="form-group">
                            <label for="exampleFormControlInput1"></label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="กรุณากรอกคำค้นหา">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"></label>
                            <select class="form-select" id="exampleFormControlSelect1">
                                <option value="" selected>กรุณาเลือกประเภท</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>





                    </div>
                </div>
            </section>

            <!--begin::Content wrapper-->
            <div class="d-flex
                            flex-column flex-column-fluid">


                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar  pt-lg-10">
                    <!--begin::Toolbar container-->

                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">

                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <section class="content" style="min-height: 100vh; background-color:#fefefe;">
                    <div id="kt_app_content" class="app-content">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-fluid">
                            <div class="row d-flex justify-content-center">
                                <div class="card border-transparent mb-5 col-9 " data-bs-theme="light">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex  justify-content-center text-center border">
                                        <!--begin::Wrapper-->
                                        <div class="m-5">
                                            <!--begin::Title-->
                                            <div class="position-relative fs-3x z-index-2 fw-bold text-dark mb-2">
                                                <span class="me-2">
                                                    สาราณุกรมงู
                                                </span>
                                                <br>


                                            </div>


                                            <!--end::Title-->

                                            <!--begin::Action-->

                                            <!--begin::Action-->
                                        </div>
                                        <!--begin::Wrapper-->


                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>

                            <!--begin::Row-->
                            <div class="row g-12 d-flex justify-content-center mt-6 mb-6">
                                <!--begin::Col-->
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="col-md-4 p-6">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch me-md-6 border p-12 rounded">
                                            <!--begin::Overlay-->

                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                style="background-image:url('{{ asset('project/images/snake-profileimg.png') }}')">
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Action-->

                                            <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->
                                            <!--begin::Body-->
                                            <div class="mt-5 text-center">
                                                <!--begin::Title-->
                                                <a href="{{ route('snake.profile') }}"
                                                    class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base">
                                                    [ชื่อของงู]</a>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                                    [รายละเอียดของงู]</div>
                                                <!--end::Text-->
                                                <!--begin::Text-->

                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->
                                    </div>
                                @endfor


                            </div>
                            <!--end::Row-->




                        </div>
                        <!--end::Content container-->
                    </div>
                </section>

                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->


        @endsection

        @push('scripts')
        @endpush
