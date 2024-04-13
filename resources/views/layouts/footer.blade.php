<!--begin::Footer-->

<div style="background-color: #534340;">
    <div id="kt_app_footer" class="app-footer mx-12 pt-3">
        <!--begin::Footer container-->
        <div
            class="app-container container-fluid d-flex flex-column flex-md-row py-3 align-item-start justify-content-between">

            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1 d-flex flex-column">
                <li class="menu-item">
                    <h3 href="#" target="_blank" class="text-white px-2">เนื้อหา</h3>
                </li>
                <li class="menu-item">
                    <a href="{{ route('snake.upload') }}" class="menu-link px-2">ค้นหางูด้วยรูปภาพ</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('snake.search.attribute') }}" class="menu-link px-2">ค้นหางูด้วยคุณลักษณะ</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('snake.search.content') }}" class="menu-link px-2">สารานุกรมงู</a>
                </li>
                <li class="menu-item">
                    <a data-bs-toggle="modal" data-bs-target="#modal_emergency_call"
                        class="menu-link px-2">สายด่วนงู</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('snake.firstaid') }}" class="menu-link px-2">วิธีปฐมพยาบาล</a>
                </li>


            </ul>
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1 d-flex flex-column">
                <li class="menu-item">
                    <h3 href="#" target="_blank" class="text-white px-2">คู่มือการใช้งาน</h3>
                </li>
                <li class="menu-item">
                    <a href="{{ route('snake.manual') }}" target="_blank" class="menu-link px-2">คู่มือการใช้งาน</a>
                </li>
                <li class="menu-item">
                    <a href="https://lin.ee/ovnLjOm" target="_blank" class="menu-link px-2">แชทบอท</a>
                </li>


            </ul>
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1 d-flex flex-column">
                <li class="menu-item">
                    <h3 href="#" target="_blank" class="text-white px-2">เงื่อนไขการใช้งาน</h3>
                </li>

                <li class="menu-item">
                    <a href="{{ route('snake.policy') }}" target="_blank"
                        class="menu-link px-2">ข้อกำหนดการใช้งานเว็บไซต์ (Policy)</a>
                </li>


            </ul>
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1 d-flex flex-column">
                <li class="menu-item">
                    <h3 href="#" target="_blank" class="text-white px-2">เกี่ยวกับเรา</h3>
                </li>

                <li class="menu-item">
                    <a href="{{ route('snake.aboutme') }}" target="_blank" class="menu-link px-2">ข้อมูลผู้จัดทำ</a>
                </li>


            </ul>

        </div>
        <!--end::Footer container-->
    </div>
</div>

<!--end::Footer-->
