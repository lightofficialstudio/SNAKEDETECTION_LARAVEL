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
                                        วิธีปฐมพยาบาล</h1>
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
                            <!--begin::Col-->
                            <div class="col-md-3">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-3  p-15 rounded">
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
                                            ขั้นตอนที่ 1</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">ตั้งสติคลายกังวล
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
                                <div class="card-xl-stretch me-md-6 border border-3 p-15 rounded">
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
                                            ขั้นตอนที่ 2</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">ล้างแผลด้วยน้ำและสบู่
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
                                <div class="card-xl-stretch me-md-6 border border-3 p-15 rounded">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset('project/images/firstaid_2.jpg') }}')">
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
                                            ขั้นตอนที่ 3</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">ถอดเสื้อผ้า
                                            ที่กดทับแผล
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <div class="mt-10"></div>
                            <div class="col-md-4">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-3  p-15 rounded">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset('project/images/firstaid_3.jpg') }}')">
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
                                            ขั้นตอนที่ 4</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">เคลื่อนไหว
                                            ให้น้อยที่สุ
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <div class="col-md-4">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border  border-3 p-15 rounded">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ asset('project/images/firstaid_4.jpg') }}')">
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
                                            ขั้นตอนที่ 5</p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">ไปโรงพยาบาล
                                            โดยเร็วที่สุด
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Text-->

                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Hot sales post-->
                            </div>
                            <div class="mt-10"></div>

                            <div class="col-md-6">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border border-5 p-15 rounded">
                                    <!--begin::Overlay-->

                                    <!--begin::Image-->

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
                                            วิธีการปฐมพยาบาลเบื้องต้นอย่างถูกวิธีเมื่อถูกงูกัด
                                        </p>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-semibold fs-4 text-gray-600 text-dark mt-3">
                                            เนื่องจากในปัจจุบันสื่อต่างๆและหลักสูตรในสถาบันการศึกษาต่างๆยังให้ความรู้ที่ผิดเกี่ยวกับวิธีการปฐมพยาบาลเบื้องต้นอย่างถูกวิธีเมื่อถูกงูกัด
                                            ซึ่งก็นับว่าเป็นปัญหาที่สำคัญที่ทำให้คนส่วนใหญ่ยังขาดความรู้และความเข้าใจเกี่ยวกับเรื่องนี้และอาจส่งผลให้เกิดอันตรายต่อผู้ที่ถูกงูที่มีพิษกัดได้
                                            ทั้งนี้ หลักของการปฐมพยาบาลผู้ที่ถูกงูพิษกัด คือ
                                            การปฐมพยาบาลเบื้องต้นสำหรับผู้ที่ถูกงูพิษกัดให้เร็วที่สุดด้วยวิธีที่ถูกต้อง
                                            สำหรับขั้นตอนการปฐมพยาบาลสำหรับผู้ที่ถูกงูกัด มีดังนี้

                                            พยายามทำให้ผู้ป่วยคลายความกังวลและมีสติ
                                            ถอดเครื่องประดับ และเสื้อผ้าที่อาจกดรัดอวัยวะส่วนที่ถูกกัดออก
                                            ล้างแผลให้ผู้ที่ถูกงูกัดด้วยน้ำสะอาด
                                            ให้ผู้ที่ถูกงูกัดนอนในท่าที่สบายและเคลื่อนไหวให้น้อยที่สุด แล้วผ้ายืดหน้ากว้าง
                                            10 – 15 ซม. และมีความยาวอย่างน้อย 4.5 เมตร
                                            หรือใช้ผ้าอะไรก็ได้ที่มีความยาวเพียงพอพันรอบอวัยวะส่วนที่ถูกงูกัดทั้งส่วนให้กระชับและไม่แน่นจนเกินไป
                                            โดยเริ่มจากส่วนปลายหรือบริเวณรอบนิ้วมือ / นิ้วเท้ายาวต่อเนื่องมาจนสุดอวัยวะ
                                            แล้วทำการดามอวัยวะส่วนที่ถูกกัดด้วยของแข็งเพื่อดามอวัยวะส่วนที่ถูกกัดไม่ให้เคลื่อนไหว
                                            เนื่องจากการเคลื่อนไหวหรือการหดตัวของกล้ามเนื้อจะทำให้พิษงูถูกดูดซึมเข้าสู่ร่างกายได้เร็วขึ้น
                                            รีบพาผู้ป่วยไปโรงพยาบาลที่ใกล้ที่สุด หรือเรียกรถพยาบาลมารับทันที
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
                            <button type="button" class="btn btn-primary btn-lg btn-rounded  p-6 m-6 fs-2"
                                data-bs-toggle="modal" data-bs-target="#modal_emergency_call">สายด่วนงู</button>
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
