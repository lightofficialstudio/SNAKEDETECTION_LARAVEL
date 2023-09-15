@extends('layouts/main')
@section('title', 'วิธีปฐมพยาบาล')
@section('modal')
    <div class="modal fade" id="openModalCallCenterById" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin::Row-->
                    <div>
                        <h1 class="fs-3x">สายด่วนงู</h1>
                        <div class="border-bottom mb-5 mt-5"></div>
                    </div>
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
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
                                            <span class="d-block">แจ้งเหตุด่วน</span>
                                            <span class="">เหตุร้ายทุกชนิด</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->

                            </div>
                            <!--end::Card widget 3-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::Card widget 3-->
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                                style="background-color: #7239EA;background-image:url('assets/media/svg/shapes/wave-bg-purple.svg')">
                                <!--begin::Header-->
                                <div class="card-header pt-5 mb-3">
                                    <!--begin::Icon-->
                                    <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                        style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                                        <i class="ki-outline ki-whatsapp text-white fs-2qx lh-0"></i>
                                    </div>
                                    <!--end::Icon-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end mb-3">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <span class="fs-4hx text-white fw-bold me-6">1667</span>
                                        <div class="fw-bold fs-6 text-white">
                                            <span class="d-block">วิทยุร่วมด้วยช่วยกัน</span>
                                            <span class="">(เครือข่ายอาสาสมัคร)</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->

                            </div>
                            <!--end::Card widget 3-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4">
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
                                        <span class="fs-4hx text-white fw-bold me-6">1669</span>
                                        <div class="fw-bold fs-6 text-white">
                                            <span class="d-block">สถาบันการแพทย์</span>
                                            <span class="">ฉุกเฉินแห่งชาติ</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->

                            </div>
                            <!--end::Card widget 3-->
                        </div>
                        <!--end::Col-->

                    </div>
                    <!--end::Row-->


                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
@endsection
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
                                <div class="card-xl-stretch me-md-6 border p-15 rounded">
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
                                            ขั้นตอนที่ 1</p>
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
                                <div class="card-xl-stretch me-md-6 border p-15 rounded">
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
                                            ขั้นตอนที่ 2</p>
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

                            <div class="col-md-3">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border p-15 rounded">
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
                                            ขั้นตอนที่ 3</p>
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

                            <div class="col-md-3">
                                <!--begin::Hot sales post-->
                                <div class="card-xl-stretch me-md-6 border p-15 rounded">
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
                                            ขั้นตอนที่ 4</p>
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

                        </div>
                        <!--end::Row-->

                        <div class="d-flex justify-content-center mt-6 mb-6">
                            <button type="button" class="btn btn-primary btn-lg btn-rounded  p-6 m-6 fs-2"
                                id="openCallCenterModal">สายด่วนงู</button>
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
