@extends('layouts/main')
@section('title', 'ค้นหางูด้วยคุณลักษณะ')
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

        .active {
            border: 2px solid #00bb19;
            border-radius: 20px;
        }
    </style>
    <div class="app-wrapper d-flex" id="kt_app_wrapper">
        <!--begin::Sidebar-->

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <section class="header-img d-flex ">
                {{-- <div class="blurred-bg"></div>  --}}
                <div class="d-flex  rounded"
                    style="width: 140vh; height:auto; background-color: rgba(226, 226, 226, 0.1); z-index: 1;">
                    <div class=" p-10" style="width: 100%;">
                        <h1 class="text-center fs-3x text-dark font-weight-bold text-stroke mb-5">เริ่มการค้นหา
                        </h1>
                        <form action="{{ route('snake.search.attribute') }}" method="GET">
                            @csrf
                            <div class="row">
                                <div class="form-group mb-5 col-12">
                                    <!--begin::Input group-->
                                    <div class="form-floating">
                                        <select name="head_type" class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected value="" disabled >ลักษณะหัวของงู (ไม่บังคับ)</option>
                                            <option  value="">ไม่ทราบ</option>
                                            <option value="รูปวงรี" @if (old('head_type', $head_type) == 'รูปวงรี') selected @endif>
                                                รูปวงรี</option>
                                            <option value="รูปสามเหลี่ยม" @if (old('head_type', $head_type) == 'รูปสามเหลี่ยม') selected @endif>
                                                รูปสามเหลี่ยม</option>
                                            <option value="หัวทู่" @if (old('head_type', $head_type) == 'หัวทู่') selected @endif>หัวทู่
                                                ดวงตาอยู่ใกล้จมูก</option>

                                        </select>
                                        <label for="floatingSelect">ลักษณะหัวของงู (ไม่บังคับ)</label>
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <div class="form-group mb-5 col-12">
                                    <!--begin::Input group-->
                                    <div class="form-floating">
                                        <select name="can_hoody" class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected value="">แผ่แม่เบี้ย (ไม่บังคับ)</option>
                                            <option value="yes" @if (old('can_hoody', $can_hoody) == 'yes') selected @endif>แผ่ได้
                                            </option>
                                            <option value="no" @if (old('can_hoody', $can_hoody) == 'no') selected @endif>
                                                ไม่สามารถแผ่ได้</option>
                                        </select>
                                        <label for="floatingSelect">แผ่แม่เบี้ย (ไม่บังคับ)</label>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <div class="form-group col-12">
                                    <!--begin::Input group-->
                                    <div class="form-floating">
                                        <select name="can_hiss" class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected value="">มีเสียงขู่ (ไม่บังคับ)</option>
                                            <option value="yes" @if (old('can_hiss', $can_hiss) == 'yes') selected @endif>
                                                งูมีเสียงร้องขู่</option>
                                            <option value="no" @if (old('can_hiss', $can_hiss) == 'no') selected @endif>
                                                ไม่มีเสียงร้องขู่</option>
                                        </select>
                                        <label for="floatingSelect">มีเสียงขู่ (ไม่บังคับ)</label>
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
                                        <div class="col-4">
                                            <label class="form-check-image @if (old('pattern', $pattern) == '') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/color/white.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        @if (old('pattern', $pattern) == '') checked @endif name="pattern" />
                                                    <div class="form-check-label">
                                                        ไม่ทราบ
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label class="form-check-image @if (old('pattern', $pattern) == 'เป็นดวง') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/pattern/circle.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value="เป็นดวง"
                                                        name="pattern" @if (old('pattern', $pattern) == 'เป็นดวง') checked @endif />
                                                    <div class="form-check-label">
                                                        เป็นดวง
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('pattern', $pattern) == 'ปล้องใหญ่') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/pattern/segment.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="ปล้องใหญ่"
                                                        name="pattern" id="text_wow"
                                                        @if (old('pattern', $pattern) == 'ปล้องใหญ่') checked @endif />
                                                    <div class="form-check-label">
                                                        ปล้องใหญ่
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('pattern', $pattern) == 'ตาราง') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/pattern/table.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="ตาราง"
                                                        name="pattern" @if (old('pattern', $pattern) == 'ตาราง') checked @endif />
                                                    <div class="form-check-label">
                                                        ตาราง
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('pattern', $pattern) == 'ปล้องเล็ก') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/pattern/small-segment.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="ปล้องเล็ก"
                                                        name="pattern" @if (old('pattern', $pattern) == 'ปล้องเล็ก') checked @endif />
                                                    <div class="form-check-label">
                                                        ปล้องเล็ก
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('pattern', $pattern) == 'เส้นแถบขนานลำตัว') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/pattern/parallel.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio"
                                                        value="เส้นแถบขนานลำตัว" name="pattern"
                                                        @if (old('pattern', $pattern) == 'เส้นแถบขนานลำตัว') checked @endif />
                                                    <div class="form-check-label">
                                                        เส้นแถบขนานลำตัว
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('pattern', $pattern) == 'ลายขวางลำตัว') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/pattern/body-stripe.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="ลายขวางลำตัว "
                                                        name="pattern"
                                                        @if (old('pattern', $pattern) == 'ลายขวางลำตัว') checked @endif />
                                                    <div class="form-check-label">
                                                        ลายขวางลำตัว
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('pattern', $pattern) == 'ไม่มีลวดลาย') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/pattern/no-pattern.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="ไม่มีลวดลาย"
                                                        name="pattern"
                                                        @if (old('pattern', $pattern) == 'ไม่มีลวดลาย') checked @endif />
                                                    <div class="form-check-label">
                                                        ไม่มีลวดลาย
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('pattern', $pattern) == 'อื่นๆ') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/pattern/others.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="อื่นๆ"
                                                        name="pattern"
                                                        @if (old('pattern', $pattern) == 'อื่นๆ') checked @endif />
                                                    <div class="form-check-label">
                                                        อื่น ๆ
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
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('color', $color) == '') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/color/white.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value=""
                                                        name="color"
                                                        @if (old('color', $color) == '') checked @endif />
                                                    <div class="form-check-label">
                                                        ไม่ทราบสี
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('color', $color) == 'สีดำ') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/color/black.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" value="สีดำ"
                                                        name="color"
                                                        @if (old('color', $color) == 'สีดำ') checked @endif />
                                                    <div class="form-check-label">
                                                        สีดำ
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('color', $color) == 'สีเขียว') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/color/green.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="สีเขียว"
                                                        name="color" id="text_wow"
                                                        @if (old('color', $color) == 'สีเขียว') checked @endif />
                                                    <div class="form-check-label">
                                                        สีเขียว
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('color', $color) == 'สีน้ำตาล') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/color/brown.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="สีน้ำตาล"
                                                        name="color"
                                                        @if (old('color', $color) == 'สีน้ำตาล') checked @endif />
                                                    <div class="form-check-label">
                                                        สีน้ำตาล
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-4">
                                            <label
                                                class="form-check-image @if (old('color', $color) == 'สีเหลือง') active @endif">
                                                <div class="form-check-wrapper">
                                                    <img src="{{ asset('project/images/color/yellow.png') }}" />
                                                </div>

                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input" type="radio" value="สีเหลือง"
                                                        name="color"
                                                        @if (old('color', $color) == 'สีเหลือง') checked @endif />
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
                                <div class="form-group col-12 text-center ">
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
                                                        ผลลัพธ์การค้นหางูด้วยคุณลักษณะ
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
                                            </a>
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
