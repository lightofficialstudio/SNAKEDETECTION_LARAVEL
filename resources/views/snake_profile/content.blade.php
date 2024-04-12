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
                    style="width: 140vh; height:60vh; background-color: rgba(255, 255, 255, 0.9); z-index: 1;">
                    <div class=" p-4" style="width: 100%;">
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
                                            <option value="">ประเภทพิษ (ไม่บังคับ)</option>
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
                                            <option value="">ประเภทสัตว์คุ้มครอง (ไม่บังคับ)</option>
                                            <option value="สิ่งมีชีวิตที่มีความเสี่ยงต่ำต่อการสูญพันธุ์"
                                                @if (old('status', $status) == 'สิ่งมีชีวิตที่มีความเสี่ยงต่ำต่อการสูญพันธุ์') selected @endif>
                                                สิ่งมีชีวิตที่มีความเสี่ยงต่ำต่อการสูญพันธุ์
                                            </option>
                                            <option value="สิ่งมีชีวิตที่เกือบอยู่ในข่ายใกล้การสูญพันธุ์"
                                                @if (old('status', $status) == 'สิ่งมีชีวิตที่เกือบอยู่ในข่ายใกล้การสูญพันธุ์') selected @endif>
                                                สิ่งมีชีวิตที่เกือบอยู่ในข่ายใกล้การสูญพันธุ์
                                            </option>
                                            <option value="เป็นสัตว์ป่าคุ้มครอง"
                                                @if (old('status', $status) == 'เป็นสัตว์ป่าคุ้มครอง') selected @endif>
                                                เป็นสัตว์ป่าคุ้มครอง
                                            </option>
                                        </select>

                                        <label for="floatingSelect">ประเภทสัตว์คุ้มครอง (ไม่บังคับ)</label>
                                    </div>
                                    <!--end::Input group-->
                                </div>


                                <div class="form-group col-12 mt-3">
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
                                                        ผลลัพธ์การค้นหา สารานุกรมงู
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
