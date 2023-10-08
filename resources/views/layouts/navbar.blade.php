<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}"
    data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
    <!--begin::Header container-->
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        <!--begin::Header mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show header menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
            </div>
        </div>

        <!--end::Header mobile toggle-->
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-13">
            <a href="../../demo41/dist/index.html">
                <img alt="Logo" src="{{ asset('assets/media/logos/demo41.svg') }}" class="h-25px" />
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-0" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <!--begin::Menu-->
                <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div
                        class="menu-item {{ request()->is('/') ? 'here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2' : 'menu-lg-down-accordion me-0 me-lg-2' }}">
                        <!--begin:Menu link-->
                        <a href="{{ route('snake.home') }}" class="menu-link">
                            <span class="menu-title">หน้าหลัก</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                        <!--end:Menu link-->
                    </div>

                    <div
                        class="menu-item {{ request()->is('snake/check*') ? 'here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2' : 'menu-lg-down-accordion me-0 me-lg-2' }}">
                        <!--begin:Menu link-->
                        <a href="{{ route('snake.check') }}" class="menu-link">
                            <span class="menu-title">ตรวจสอบชนิดงู</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div
                        class="menu-item {{ request()->is('snake/search*') ? 'here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2' : 'menu-lg-down-accordion me-0 me-lg-2' }}">
                        <!--begin:Menu link-->
                        <a href="{{ route('snake.search') }}" class="menu-link">
                            <span class="menu-title">สาราณูกรมงู</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div
                        class="menu-item {{ request()->is('snake/firstaid*') ? 'here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2' : 'menu-lg-down-accordion me-0 me-lg-2' }}">
                        <!--begin:Menu link-->
                        <a href="{{ route('snake.firstaid') }}" class="menu-link">
                            <span class="menu-title">วิธีปฐมพยาบาล</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Menu wrapper-->

        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
