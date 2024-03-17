@extends('layouts/main')
@section('title', 'สาราณุกรมงู')
@section('content')
    <style>
        .header-img {
            position: relative;
            min-height: 120vh;
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
            filter: blur(6px);
            z-index: 0;
        }
    </style>
    <div class="app-wrapper d-flex" id="kt_app_wrapper">
        <!--begin::Sidebar-->

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <section class="header-img d-flex ">
                <div class="blurred-bg"></div> <!-- นี่คือ div ที่จะแสดงรูปภาพที่เบลอ -->
                <div class="d-flex  rounded"
                    style="width: 140vh; height:105vh; background-color: rgba(255, 255, 255, 0.9); z-index: 1;">

                    <div class=" p-4" style="width: 100%;">
                        <h1 class="text-center fs-3x text-dark font-weight-bold text-stroke mb-5">เริ่มการค้นหา
                        </h1>

                        <div class="row">
                            <div class="form-group mb-5 col-12">
                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>เลือกประเภทของงู (ไม่บังคับ)</option>
                                        <option value="1">มีพิษอันตราย</option>
                                        <option value="2">พิษเขี้ยวหลัง</option>
                                        <option value="3">ไม่มีพิษ</option>
                                    </select>
                                    <label for="floatingSelect">เลือกประเภทของงู (ไม่บังคับ)</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="form-group mb-5 col-12">
                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>เลือกสถานภาพงู (ไม่บังคับ)</option>
                                        <option value="1">เป็นสัตว์ป่าคุ้มครอง</option>
                                        <option value="2">เสี่ยงต่ำต่อการสูญพันธ์</option>
                                    </select>
                                    <label for="floatingSelect">เลือกสถานภาพงู (ไม่บังคับ)</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="form-group col-12">
                                <!--begin::Input group-->
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>เลือกสถานที่ ที่สามารถพบงู (ไม่บังคับ)</option>
                                        <option value="1">ทุกภาค</option>
                                        <option value="2">ภาคเหนือ</option>
                                        <option value="3">ภาคตะวันออก</option>
                                        <option value="4">ภาคตะวันตก</option>
                                        <option value="5">ภาคใต้</option>
                                    </select>
                                    <label for="floatingSelect">เลือกสถานที่ ที่สามารถพบงู (ไม่บังคับ)</label>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="form-group col-6">
                                <!--begin::Input group-->
                                <label for="pattern-snake" class="fs-2x text-left mt-3 mb-3">ลวดลายบนตัวงู</label>

                                <!--begin::Row-->
                                <div class="row mw-350px mb-5" data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image, .form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <label class="form-check-image active">
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('project/images/pattern/circle.png') }}" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" checked value="1"
                                                    name="pattern_option" />
                                                <div class="form-check-label">
                                                    วงกลม
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('project/images/pattern/segment.png') }}" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="pattern_option" id="text_wow" />
                                                <div class="form-check-label">
                                                    ปล้องใหญ่
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('project/images/pattern/table.png') }}" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="pattern_option" />
                                                <div class="form-check-label">
                                                    ตาราง
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('project/images/pattern/table.png') }}" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="pattern_option" />
                                                <div class="form-check-label">
                                                    ตาราง
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--end::Input group-->
                            </div>
                            <div class="form-group col-6">
                                <!--begin::Input group-->
                                <label for="pattern-snake" class="fs-2x text-left mt-3 mb-3">สีบนตัวงู</label>

                                <!--begin::Row-->
                                <div class="row mw-350px mb-5" data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image, .form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <label class="form-check-image active">
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('project/images/color/black.png') }}" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" checked value="1"
                                                    name="color_option" />
                                                <div class="form-check-label">
                                                    สีดำ
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('project/images/color/green.png') }}" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="color_option" id="text_wow" />
                                                <div class="form-check-label">
                                                    สีเขียว
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('project/images/color/brown.png') }}" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="color_option" />
                                                <div class="form-check-label">
                                                    สีน้ำตาล
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <label class="form-check-image">
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('project/images/color/yellow.png') }}" />
                                            </div>

                                            <div class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input" type="radio" value="1"
                                                    name="color_option" />
                                                <div class="form-check-label">
                                                    สีเหลือง
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--end::Input group-->
                            </div>
                            <div class="form-group col-12 ">
                                <button class="btn btn-primary btn-lg">ค้นหา</button>
                            </div>
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
                                @foreach ($snakes as $snake)
                                    <div class="col-md-4 p-6">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch me-md-6 border p-12 rounded">
                                            <!--begin::Overlay-->

                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover car d-rounded min-h-175px"
                                                style="background-image:url('{{ asset($snake->image ? 'project/images/snake_type/' . $snake->image : 'project/images/snake-profileimg.png') }}')">
                                            </div>

                                            <!--end::Image-->
                                            <!--begin::Action-->

                                            <!--end::Action-->
                                            </a>
                                            <!--end::Overlay-->
                                            <!--begin::Body-->
                                            <div class="mt-5 text-center">
                                                <!--begin::Title-->
                                                <a href="{{ route('snake.profile', $snake->id) }}"
                                                    class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base">
                                                    {{ $snake->name_th ?? '' }}</a>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                                    {{ str_replace('_', ' ', $snake->name_en ?? '') }}
                                                </div>

                                                <!--end::Text-->
                                                <!--begin::Text-->

                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->
                                    </div>
                                @endforeach


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
