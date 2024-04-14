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
    </style>
    <div class="app-wrapper d-flex" id="kt_app_wrapper">
        <!--begin::Sidebar-->

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
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

                                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">สารานุกรม</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                            <!--begin::Page title-->
                            <div class="page-title d-flex align-items-center me-3">
                                <!--begin::Title-->
                                <h1
                                    class="page-heading d-flex text-dark fw-bolder fs-2qx flex-column justify-content-center my-0">
                                    สารานุกรมงู</h1>



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
            <section class="header-img d-flex ">
                <div class="d-flex  rounded"
                    style="width: 140vh; min-height:60vh; background-color: rgba(239, 239, 239, 0.9); z-index: 1;">
                    <div class="p-4" style="width: 100%;">
                        <h1 class="text-center fs-3x text-dark font-weight-bold text-stroke mb-5">เริ่มการค้นหา
                        </h1>
                        <form action="{{ route('snake.search.content') }}" method="GET">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12 mb-5">
                                    <!--begin::Input group-->
                                    <div class="form-floating">

                                        <input name="searchByName" type="text" class="form-control"
                                            value="{{ $searchByName }}">
                                        <label for="floatingSelect">ค้นหา (โดยสามารถใช้ชื่อ ไทย,อังกฤษ,วิทยาศาสตร์)</label>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="form-group mb-5 col-12">
                                    <!--begin::Input group-->
                                    <div class="form-floating">
                                        <select name="posion_type" class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected disabled value="">ประเภทพิษ (ไม่บังคับ)</option>
                                            <option value="">ไม่ทราบ </option>
                                            <option value="งูไม่มีพิษ" @if (old('posion_type', $posion_type) == 'งูไม่มีพิษ') selected @endif>
                                                งูไม่มีพิษ</option>
                                            <option value="งูพิษอันตราย" @if (old('posion_type', $posion_type) == 'งูพิษอันตราย') selected @endif>
                                                งูพิษอันตราย</option>
                                            <option value="งูพิษเขี้ยวหลัง"
                                                @if (old('posion_type', $posion_type) == 'งูพิษเขี้ยวหลัง') selected @endif>งูพิษเขี้ยวหลัง</option>
                                        </select>

                                        <label for="floatingSelect">ประเภทพิษ (ไม่บังคับ)</label>
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <div class="form-group mb-5 col-12">
                                    <!--begin::Input group-->
                                    <div class="form-floating">
                                        <select name="status" class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected disabled value="">ประเภทสัตว์คุ้มครอง (ไม่บังคับ)
                                            </option>
                                            <option value="">ไม่ทราบ</option>

                                            <option value="yes" @if (old('status', $status) == 'yes') selected @endif>
                                                ไม่เป็นสัตว์คุ้มครอง
                                            </option>
                                            <option value="no" @if (old('status', $status) == 'no') selected @endif>
                                                เป็นสัตว์ป่าคุ้มครอง
                                            </option>
                                        </select>

                                        <label for="floatingSelect">ประเภทสัตว์คุ้มครอง (ไม่บังคับ)</label>
                                    </div>
                                    <!--end::Input group-->
                                </div>

                                <div class="form-group mb-5 col-12">
                                    <!--begin::Input group-->
                                    <div class="form-floating">
                                        <select name="region" class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected disabled value="">ภูมิภาคที่อยู่อาศัย (ไม่บังคับ)
                                            </option>
                                            <option value="">ไม่ทราบ</option>
                                            <option value="ทั่วทุกภาค" @if (old('region', $region) == 'ทั่วทุกภาค') selected @endif>
                                                ทุกภูมิภาค
                                            </option>
                                            <option value="กลาง" @if (old('region', $region) == 'กลาง') selected @endif>
                                                ภาคกลาง
                                            </option>
                                            <option value="ตะวันออก" @if (old('region', $region) == 'ตะวันออก') selected @endif>
                                                ภาคตะวันออก
                                            </option>
                                            <option value="ใต้" @if (old('region', $region) == 'ใต้') selected @endif>
                                                ภาคใต้
                                            </option>
                                            <option value="ตะวันออกเฉียงเหนือ"
                                                @if (old('region', $region) == 'ตะวันออกเฉียงเหนือ') selected @endif>
                                                ภาคตะวันออกเฉียงเหนือ
                                            </option>
                                            <option value="ตะวันตก" @if (old('region', $region) == 'ตะวันตก') selected @endif>
                                                ภาคตะวันตก
                                            </option>


                                        </select>

                                        <label for="floatingSelect">ประเภทสัตว์คุ้มครอง (ไม่บังคับ)</label>
                                    </div>
                                    <!--end::Input group-->
                                </div>


                                <div class="form-group col-12 mt-3 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">ค้นหา</button>
                                </div>
                            </div>
                        </form>
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
                @if ($snakes->isNotEmpty())
                    <section class="content" id="search-results" style="min-height: 100vh; background-color:#fefefe;">
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
                                                        @if ($searchPerformed === 1)
                                                            ผลลัพธ์การค้นหา สารานุกรมงู
                                                        @else
                                                            สารานุกรมงู
                                                        @endif
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
                                            <a href="{{ route('snake.profile', $snake->id) }}">
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
                                            </a>
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
@else
    <section class="content" id="search-results" style="min-height: 100vh; background-color:#fefefe;">
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
                                        ไม่พบข้อมูลงูที่ค้นหา
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






            </div>
            <!--end::Content container-->
        </div>
    </section>
    @endif

    <!--end::Content-->
    </div>
    <!--end::Content wrapper-->


@endsection


@push('scripts')
    <script>
        // ตรวจสอบว่ามีการทำการค้นหาหรือไม่
        @if (session('searchPerformed'))
            window.addEventListener('load', () => {
                // หา element ที่มี id 'search-results'
                const searchResultsSection = document.getElementById('search-results');
                if (searchResultsSection) {
                    // เลื่อนหน้าจอไปยัง element
                    searchResultsSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        @endif
    </script>
@endpush
