@extends('layouts/main')
@section('title', 'หน้าหลัก')
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

                    <div class="text-center p-4">
                        <h1 class="text-center fs-3x text-white font-weight-bold text-stroke">เริ่มการตรวจสอบชนิดงูด้วยภาพ
                        </h1>
                        <h1 class="text-center fs-2x text-white font-weight-bold text-stroke">ทำนายชนิดงูโดย Machine
                            Learning</h1>
                        <button class="btn btn-primary btn-lg btn-rounded p-8 mt-7 fs-3"
                            id="clickToUploadImages">เลือกรูปภาพ</button>
                        <input type="file" name="" id="inputToUploadImages" style="display: none;">
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
                                                    ทำนายชนิดงูโดย Machine Learning คืออะไร?
                                                </span>
                                                <br>


                                            </div>
                                            <div
                                                class="d-flex justify-content-center fs-2x z-index-2 text-dark align-items-center mb-3">
                                                <span>
                                                    เราฝึกฝนคอมพิวเตอร์ให้เรียนรู้และจำแนกลักษณะต่างๆของงูแต่ละชนิด<br>
                                                    เพื่อให้สามารถทำนายชนิดงูจากรูปภาพได้<br>
                                                    โดยในเว็บไซต์นี้มีข้อมูลของงูไทยทั้งหมด 23 ชนิด
                                                    ซึ่งสามารถพบเจอได้บ่อย
                                                </span>
                                            </div>

                                            <div
                                                class="d-flex justify-content-center fs-2x z-index-2 text-danger align-items-center ">
                                                <span>
                                                    ** การจำแนกด้วยรูปภาพนั้นมีความเสี่ยงในการผิดพลาด <br>
                                                    กรณีที่ถูกงูกัด เพื่อความปลอดภัย
                                                    ควรพาผู้ที่ถูกงูกัดพบแพทย์ทุกครั้ง **
                                                </span>
                                            </div>


                                            <!--end::Title-->

                                            <!--begin::Action-->

                                            <!--begin::Action-->
                                        </div>
                                        <!--begin::Wrapper-->

                                        <!--begin::Illustration-->
                                        {{-- <img src="{{ asset('project/images/anaconda (1).png') }}"
                                            class="position-absolute me-3 bottom-0 end-0 h-100px" alt=""> --}}
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>

                            <!--begin::Row-->
                            <div class="row g-12 d-flex justify-content-center mt-6 mb-6">
                                <!--begin::Col-->
                                <div class="col-md-3 ">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch me-md-6 border p-12 rounded">
                                        <!--begin::Overlay-->

                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                            style="background-image:url('{{ asset('project/images/snake.jpg') }}')">
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
                                                สาราณุกรมงู</p>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                                ค้นหาและดูข้อมูลงู
                                                23 ชนิด ที่ถูกพบบ่อย</div>
                                            <!--end::Text-->
                                            <!--begin::Text-->

                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                                <div class="col-md-3 ">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch me-md-6 border p-12 rounded">
                                        <!--begin::Overlay-->

                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                            style="background-image:url('{{ asset('project/images/snake3.jpg') }}')">
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
                                                วิธีปฐมพยาบาล</p>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-3 text-gray-600 text-dark mt-3">การปฐมพยาบาล
                                                เบื้องต้นเมื่อถูกกัด</div>
                                            <!--end::Text-->
                                            <!--begin::Text-->

                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                                <div class="col-md-3 ">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch me-md-6 border p-12 rounded">
                                        <!--begin::Overlay-->

                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                            style="background-image:url('{{ asset('project/images/snake2.jpg') }}')">
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
                                                สายด่วนงู</p>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">งูเข้าบ้าน
                                                หรือ
                                                ถูกงูกัด เบอร์ติดต่อที่เกี่ยวข้อง</div>
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

                            <!--begin::Row-->
                            <div class="row g-12 d-flex justify-content-center mt-6 mb-6">
                                <!--begin::Col-->
                                <div class="col-md-12 ">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch me-md-6  p-12 rounded text-center">
                                        <!--begin::Overlay-->

                                        <!--begin::Image-->
                                        <img src="{{ asset('project/images/line.jpg') }}" alt="line-chat" width="800px;">
                                        <!--end::Image-->
                                        <!--begin::Action-->

                                        <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->

                                    </div>
                                    <!--end::Hot sales post-->
                                </div>


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

        @section('script')
            <script>
                $(document).ready(function() {
                    $('#clickToUploadImages').on('click', function() {
                        $('#inputToUploadImages').click();
                    });
                });
            </script>
        @endsection
