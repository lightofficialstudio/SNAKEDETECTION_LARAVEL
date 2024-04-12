@extends('layouts/main')
@section('title', 'ค้นหาด้วยรูปภาพ')
@section('css')
    <style>
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1050;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader p {
            color: #fff;
            margin-bottom: 10px;
        }

        .spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border-left-color: #fff;
            animation: spin 1s infinite linear;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet" />

@endsection
@section('content')
    @include('components.modal-manual-upload-snake-module')
    <!-- Loader -->
    <div id="loader" class="loader-container" style="display: none;">
        <div class="loader">
            <p>กำลังตรวจจับชนิดของงู <br>โปรดรอประมาณ 10-20 วินาที...</p>
            <div class="spinner"></div>
        </div>
    </div>

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
                                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">ค้นหาด้วยรูปภาพ</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                                <!--begin::Page title-->
                                <div class="page-title d-flex align-items-center me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bolder fs-2qx flex-column justify-content-center my-0">
                                        ค้นหาด้วยรูปภาพ</h1>


                                    <!--end::Title-->
                                </div>

                                <!--end::Page title-->
                            </div>
                            <div data-bs-toggle="modal" data-bs-target="#modal_upload_snake_modal">
                                <button type="button" class="btn btn-secondary w-20" data-bs-toggle="tooltip"
                                    data-bs-placement="left"
                                    title="
                               เริ่มต้นด้วยการอัปโหลดรูปภาพของงู ครอบรูปภาพของงู เมื่อทำเสร็จสิ้นให้กดที่ ปุ่ม 'เริ่มการตรวจสอบชนิดงู' ">
                                    <i class="ki-outline ki-information-2 fs-3"></i>
                                    วิธีใช้งาน
                                </button>
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
                                <div class="col-md-6 col-sm-12 border border-gray-300 border-dashed rounded ">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch me-md-6  p-12 ">
                                        <!--begin::Overlay-->
                                        <!--begin::Title-->
                                        <p href="#"
                                            class="fs-2x text-dark fw-bold text-hover-primary text-dark lh-base text-center">
                                            อัปโหลดรูปภาพเพื่อตรวจสอบชนิดงู</p>
                                        <!--end::Title-->
                                        <!--begin::Image-->
                                        <div>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" class="form-control" name="snake_image"
                                                    id="snake-image" style="display: none;">
                                                <div class="text-center mb-10 mt-10">
                                                    <button type="button" onclick="uploadImage()" for="snake-image"
                                                        class="btn btn-secondary btn-lg rounded w-50 h-100 fs-2x p-5"> <i
                                                            class="ki-outline ki-file fs-3x mb-5"></i><br>เลือกรูปภาพ</button>


                                                </div>
                                            </form>
                                        </div>




                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>

                            </div>
                            <div class="mb-5">

                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10 justify-content-between "
                                    style="min-height:100vh">

                                    <div class="col-md-6 col-sm-12 ">
                                        <h2>รูปภาพนำเข้า</h2><br />
                                        <div class="mb-5">
                                            <span class="badge badge-secondary p-3">* ผู้ใช้งานสามารถครอบรูปภาพงู
                                                เพื่อการตรวจจับที่แม่นยำมากขึ้น</span>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center "
                                            style="overflow: hidden;" id="image-container">

                                            <div id="image-container"
                                                style="max-width: 100%; max-height: 100%; min-width:500px; min-height:500px;">
                                                <img id="image" src="{{ asset('project/images/snake-profileimg.png') }}"
                                                    alt="รูปภาพของงู"
                                                    style="width:100%; height:100%; object-fit: cover; object-position: center;">
                                            </div>



                                        </div>

                                        <div class="mt-5 text-center">
                                            <button onclick="handleSubmitSnakeImage()" class="btn btn-primary w-50">
                                                เริ่มการตรวจสอบชนิดงู</button>
                                            {{-- <p>*ขั้นตอนที่ 2 หลังจากเลือกรูปภาพ <br>
                                                เมื่อครอบเสร็จแล้วให้กดที่ปุ่มเริ่มการตรวจสอบชนิดงู</p> --}}

                                        </div>


                                    </div>
                                    <div class="col-md-6 col-sm-12 ">
                                        <div class="h-150px">

                                            <h2>ผลลัพธ์การตรวจสอบ</h2><br />
                                            <span class="badge badge-light-danger p-3">*
                                                ผลลัพธ์ในการตรวจสอบอาจมีความไม่ถูกต้อง
                                                ในกรณีที่ถูกงูกัดให้รีบพบแพทย์ให้เร็วที่สุด</span>

                                            <div id="snake-result-prediction" class="mb-10"></div>
                                        </div>

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
                function uploadImage() {
                    $('#snake-image').click();

                }
            </script>

            <script>
                var routes = {
                    snakeProfile: "{{ route('snake.profile', ['id' => 'PLACEHOLDER']) }}".replace('PLACEHOLDER', '%id%')
                };
            </script>

            <script>
                var cropper;
                $('input[name="snake_image"]').change(function(e) {
                    var files = e.target.files;
                    var done = function(url) {
                        $('#image').attr('src', url); // ตั้งค่า src ใหม่สำหรับรูปภาพ
                        if (cropper) {
                            cropper.destroy(); // ล้างอินสแตนซ์ Cropper.js ที่มีอยู่
                        }
                        cropper = new Cropper(document.getElementById('image'), {
                            aspectRatio: 1,
                            viewMode: 1,

                        });
                    };

                    if (files && files.length > 0) {
                        var file = files[0];
                        if (URL) {
                            done(URL.createObjectURL(file));
                        } else if (FileReader) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                done(reader.result);
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                });
            </script>
            <script>
                // ฟังก์ชันสำหรับการแสดงรูปภาพที่เลือกจาก input ในการอัปโหลด
                function handleSubmitSnakeImage() {
                    if (!cropper) {
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: 'กรุณาเลือกรูปภาพก่อนทำการตรวจสอบ',
                            confirmButtonText: 'ตกลง'
                        });
                        return;
                    }
                    if (cropper) {
                        cropper.getCroppedCanvas().toBlob((blob) => {
                            var formData = new FormData();
                            formData.append('snake_image', blob, 'cropped.jpg');

                            // แสดง loader
                            $('#loader').show();

                            $.ajax({
                                url: '{{ route('snake.upload.post') }}', // ตรวจสอบให้แน่ใจว่า URL ถูกต้องและรองรับการใช้งาน
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                method: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    displayPredictionResults(response);
                                    if (response.length === 0) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'เกิดข้อผิดพลาด!',
                                            text: 'ไม่มีผลการทำนาย สาเหตุเป็นได้ดังต่อไปนี้ 1.รูปภาพนำเข้าไม่ชัด 2.มีสิ่งกีดขวางตัวงู 3.รูปภาพที่นำเข้าไม่มีงู 4.เป็นชนิดของงูที่ไม่ได้อยู่ในฐานข้อมูล โปรดตรวจสอบรูปภาพนำเข้าใหม่อีกครั้ง',
                                            confirmButtonText: 'ตกลง'
                                        });
                                    }
                                    for (let i = 0; i < response.length; i++) {
                                        if (response[i].confidence < 0.5) {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'คำเตือน!',
                                                text: 'ผลการทำนายต่ำกว่า 50% สาเหตุเป็นได้ดังต่อไปนี้ 1.รูปภาพนำเข้าไม่ชัด 2.มีสิ่งกีดขวางตัวงู 3.รูปภาพที่นำเข้าไม่มีงู 4.เป็นชนิดของงูที่ไม่ได้อยู่ในฐานข้อมูล โปรดตรวจสอบรูปภาพใหม่อีกครั้ง',
                                                confirmButtonText: 'ตกลง'
                                            });

                                        }
                                    }
                                },
                                error: function(xhr, status, error) {
                                    // ซ่อน loader เมื่อเกิดข้อผิดพลาด
                                    $('#loader').hide();
                                    if (xhr.status === 422) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'เกิดข้อผิดพลาด!',
                                            text: 'เกิดข้อผิดพลาดในการตรวจสอบรูปภาพ กรุณาลองใหม่อีกครั้ง ขนาดไฟล์ไม่เกิน 5MB และเป็นไฟล์รูปภาพเท่านั้น',

                                            confirmButtonText: 'ตกลง'
                                        });
                                    } else {
                                        // สามารถจัดการกับ status code อื่นๆ ตามต้องการ
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'เกิดข้อผิดพลาด',
                                            text: 'กรุณาใช้งานไฟล์ให้อยู่ในรูปแบบที่กำหนด คือ เป็นรูปภาพ jpeg, png, jpg, gif, webp เท่านั้น',
                                            confirmButtonText: 'ตกลง'
                                        });
                                    }
                                },
                                complete: function() {
                                    // ซ่อน loader เมื่อการประมวลผลเสร็จสิ้น
                                    $('#loader').hide();
                                }
                            });
                        });
                    }
                }






                // ฟังก์ชันสำหรับแสดงผลการทำนาย 3 อันดับแรก
                function displayPredictionResults(predictions) {
                    let resultHtml = '<div class="list-group">'; // ใช้ list-group สำหรับสไตล์ของ Bootstrap
                    predictions.slice(0, 3).forEach(function(prediction, index) {
                        // ใช้ list-group-item และเพิ่มสไตล์ให้กับการแสดงผล
                        resultHtml += `
                        <a href="${routes.snakeProfile.replace('%id%', prediction.id)}" class="list-group-item list-group-item-action mb-5 mt-3  border border-gray-300 border-dashed rounded" aria-current="true">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <img src="${prediction.image}" style="max-width:200px; max-height:200px; " />
                                <div class="">
                                    <h2 class="mb-1">อันดับ ${index + 1} : ${prediction.class_name}</h2>
                                    <br>
                                    <h5 class="${prediction.posion_type === "งูไม่มีพิษ" ? 'text-muted' : 'text-danger'}">${prediction.posion_type }   ${prediction.posion_description}</h5>
                                    <br>
                                    <h4 class="text-muted badge badge-light-success">ความน่าจะเป็น : ${prediction.probability}%</h4>
                                </div>
                                <div>&nbsp;</div>
                            </div>
                        </a>`;

                    });
                    resultHtml += '</div> <div class="mb-10"></div>';

                    // อัปเดตเนื้อหาในภาคผลการทำนาย
                    $('#snake-result-prediction').html(resultHtml);
                }
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
        @endpush
