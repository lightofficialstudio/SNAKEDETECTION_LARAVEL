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
                                        <a href="{{ route('snake.home') }}" class="text-white text-hover-primary">
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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">ค้นหางู</li>

                                    <li class="breadcrumb-item">
                                        <i class="ki-outline ki-right fs-5 text-gray-700 mx-n1"></i>
                                    </li>

                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">{{ $snake->name_th }}</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->

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
                        <div class="">
                            <div class="">

                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                    <div class="col-md-5 text-center ">
                                        <h1 class="mt-5 mb-5 fs-2x">
                                            {{ $snake->name_th }} <br>
                                        </h1>
                                        @if ($snake->posion_type == 'งูไม่มีพิษ')
                                            <span class="badge badge-success fs-2x">ไม่มีพิษ</span>
                                        @else
                                            <span class="badge badge-danger fs-2x ">{{ $snake->posion_type }}</span>
                                            <span
                                                class="badge badge-danger fs-2x">{{ $snake->posion_description ?? '' }}</span>
                                        @endif

                                        <div class="mb-5">

                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset($snake->image ? 'project/images/snake_type/' . $snake->image : 'project/images/snake-profileimg.png') }}"
                                                alt="snake-original-check" style="max-width: 370px; max-height: 500px;"
                                                class="shadow">

                                        </div>
                                        {{-- <h1 class="text-center badge badge-dark mt-5 mb-5 p-5">ข้อมูลของงู</h1><br /> --}}
                                        <div class="justify-content-center d-flex mt-10">

                                            <table class="table table-bordered w-300px">
                                                <thead class="table-dark">
                                                    <th>ข้อมูลงู</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><b>ชื่อไทย</b> :
                                                            {{ $snake->name_th }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>ชื่ออังกฤษ</b> : {{ str_replace('_', ' ', $snake->name_en) }}
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td><b>ชื่อวิทยาศาสตร์</b> :
                                                            <i> {{ str_replace('_', ' ', $snake->name_sci) }}</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>ประเภทของพิษ : </b>

                                                            @if ($snake->posion_type == 'งูไม่มีพิษ')
                                                                <span class="badge badge-success">ไม่มีพิษ</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-danger">{{ $snake->posion_type }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @if ($snake->posion_type != 'งูไม่มีพิษ')
                                                        <tr>
                                                            <td><b>คำอธิบายของพิษ</b> :
                                                                <span class="badge badge-light-danger">
                                                                    {{ $snake->posion_description ?? '' }}
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    @else
                                                    @endif

                                                </tbody>

                                            </table>


                                        </div>


                                    </div>

                                    <div class="col-md-7">


                                        <div>
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-dark fs-5">ลักษณะเด่น</div>
                                                        <!--end::Badge-->
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <i class="ki-solid ki-gear fs-2"></i>

                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Title-->
                                                    {{-- <div class="mb-2">
                                                        <b href="#"
                                                            class="fs-4 fw-bold mb-1 text-gray-900 text-hover-primary">[หัวข้อ]</b>
                                                    </div> --}}
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">
                                                        {{ $snake->features ?? '' }}</div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-dark fs-5">ถิ่นที่อยู่อาศัย</div>
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

                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">
                                                        {{ $snake->location ?? '' }}</div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-dark fs-5">อาหาร</div>
                                                        <!--end::Badge-->
                                                        <!--begin::Menu-->
                                                        <div>
                                                            <i class="ki-solid ki-focus fs-2"></i>

                                                        </div>
                                                        <!--end::Menu-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Title-->

                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">
                                                        {{ $snake->food ?? '' }}</div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            @if ($snake->behaviors != '-')
                                                <div class="card mb-6 mb-xl-9">
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <div class="d-flex flex-stack mb-3">
                                                            <!--begin::Badge-->
                                                            <div class="badge badge-dark fs-5">พฤติกรรม</div>
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

                                                        </div>
                                                        <!--end::Title-->
                                                        <!--begin::Content-->
                                                        <div class="fs-6 fw-semibold text-gray-600 mb-5">
                                                            {{ $snake->behaviors ?? '' }}</div>

                                                    </div>
                                                </div>
                                            @endif

                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-dark fs-5">สถานภาพปัจจุบัน</div>
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

                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">
                                                        {{ $snake->status == 'yes' ? 'เป็นสัตว์คุ้มครอง' : 'ไม่เป็นสัตว์คุ้มครอง' }}
                                                    </div>

                                                </div>
                                            </div>
                                            {{--  --}}
                                            <div class="card mb-6 mb-xl-9">
                                                <div class="card-body">
                                                    <!--begin::Header-->
                                                    <div class="d-flex flex-stack mb-3">
                                                        <!--begin::Badge-->
                                                        <div class="badge badge-dark fs-5">แหล่งอ้างอิง</div>
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

                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Content-->
                                                    <div class="fs-6 fw-semibold text-gray-600 mb-5">
                                                        <a
                                                            href="{{ $snake->reference ?? '' }}">{{ $snake->reference ?? '' }}</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="text-center mb-5">
                                    <a href="javascript:window.history.back();"
                                        class="btn btn-primary btn-lg rounded-4">ย้อนกลับ</a>
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
