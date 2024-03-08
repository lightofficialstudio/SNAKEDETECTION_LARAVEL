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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">ตรวจสอบชนิดงู</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bolder fs-2qx flex-column justify-content-center my-0">
                                        ตรวจสอบชนิดงู</h1>
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
                        <div class="container">
                            <div class="row g-12 d-flex justify-content-center mt-6 mb-6">
                                <!--begin::Col-->
                                <div class="col-md-6 ">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch me-md-6 border p-12 rounded">
                                        <!--begin::Overlay-->
                                        <!--begin::Title-->
                                        <p href="#"
                                            class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base text-center">
                                            อัพโหลดรูปภาพเพื่อตรวจสอบชนิดงู</p>
                                        <!--end::Title-->
                                        <!--begin::Image-->
                                        <div>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" class="form-control" name="snake_image"
                                                    id="snake-image">
                                            </form>
                                        </div>

                                        <div class="mt-5 text-center">
                                            <button onclick="handleSubmitSnakeImage()"
                                                class="btn btn-primary">ตรวจสอบชนิดงู</button>
                                        </div>


                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>

                            </div>
                            <div class="">

                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10 justify-content-between">
                                    <div class="col-md-6">
                                        <h2>รูปภาพนำเข้า</h2><br />
                                        <div class="border border-2 d-flex justify-content-center"
                                            style="width: 500px; height: 500px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                                            <img src="" alt="snake-original-check" id="previewSnakeImage"
                                                style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <h2>ผลลัพธ์การตรวจสอบ</h2><br />
                                        <div id="snake-result-prediction"></div>

                                    </div>


                                    {{-- <div class="col-md-8">
                                        <h2>ผลลัพธ์การตรวจสอบ : <b>[ชื่อของงู]</b></h2> <br />
                                        <p>โอกาส (Probability) : 12%</p>

                                        <div class="border border-2 d-flex justify-content-center">
                                            <img src="" alt="snake-original-check" width="800px" height="300px">
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        </div>




                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->


        @endsection

        @push('scripts')
            <script>
                // ฟังก์ชันสำหรับการอัพโหลดรูปภาพ
                function handleSubmitSnakeImage() {
                    let formData = new FormData();
                    formData.append('snake_image', $('input[name="snake_image"]').prop('files')[0]);

                    $.ajax({
                        url: '{{ route('snake.upload.post') }}',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        method: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            displayPredictionResults(response);
                        }
                    })
                }

                // ฟังก์ชันสำหรับแสดงผลการทำนาย 3 อันดับแรก
                function displayPredictionResults(predictions) {
                    let resultHtml = '<div class="list-group">'; // ใช้ list-group สำหรับสไตล์ของ Bootstrap
                    predictions.slice(0, 3).forEach(function(prediction, index) {
                        // ใช้ list-group-item และเพิ่มสไตล์ให้กับการแสดงผล
                        resultHtml += `
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">อันดับ ${index + 1}: ${prediction.class_name}</h5>
                    <small>ความน่าจะเป็น: ${prediction.probability}</small>
                </div>
            </a>`;
                    });
                    resultHtml += '</div>';

                    // อัปเดตเนื้อหาในภาคผลการทำนาย
                    $('#snake-result-prediction').html(resultHtml);
                }


                // ฟังก์ชันสำหรับการแสดงรูปภาพที่เลือกจาก input ในการอัพโหลด
                $(document).ready(function() {
                    $('#snake-image').change(function() {
                        var input = this;
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                $('#previewSnakeImage').attr('src', e.target.result).css({
                                    'width': '500px',
                                    'height': '500px',
                                    'object-fit': 'cover'
                                }).show();
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    });
                });
            </script>
        @endpush
