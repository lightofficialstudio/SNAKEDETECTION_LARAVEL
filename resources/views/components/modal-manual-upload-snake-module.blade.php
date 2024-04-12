  <!--begin::Modal -->
  <div class="modal fade" id="modal_upload_snake_modal" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-1000px">
          <!--begin::Modal content-->
          <div class="modal-content">
              <!--begin::Modal header-->
              <div class="modal-header py-7 d-flex justify-content-between">
                  <!--begin::Modal title-->
                  <h2>วิธีการใช้งาน</h2>
                  <!--end::Modal title-->
                  <!--begin::Close-->
                  <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                      <i class="ki-outline ki-cross fs-1"></i>
                  </div>
                  <!--end::Close-->
              </div>
              <!--begin::Modal header-->
              <!--begin::Modal body-->
              <div class="modal-body scroll-y m-5">
                  <!--begin::Stepper-->
                  <div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
                      <!--begin::Nav-->
                      <div class="stepper-nav justify-content-center py-2">
                          <!--begin::Step 1-->
                          <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                              <h3 class="stepper-title">วิธีการใช้งาน การตรวจจับชนิดของงู</h3>
                          </div>
                          <!--end::Step 1-->

                      </div>
                      <!--end::Nav-->
                      <!--begin::Form-->
                      <form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate"
                          id="kt_modal_offer_a_deal_form">
                          <!--begin::Type-->
                          <div class="current" data-kt-stepper-element="content">
                              <!--begin::Wrapper-->
                              <div class="w-100">
                                  <!--begin::Heading-->
                                  <div class="mb-13">
                                      <!--begin::Title-->

                                      <!--end::Title-->
                                      <!--begin::Description-->
                                      <div class="text-muted fw-semibold fs-5">
                                          คู่มือการใช้งาน การตรวจจับชนิดของงู โดยสามารถเลือกรูปภาพของงู และ
                                          ครอบรูปภาพของงู เพื่อตรวจสอบชนิดของงู ด้วยการใช้งาน AI Machine Learning
                                      </div>
                                      <!--end::Description-->
                                  </div>
                                  <!--end::Heading-->
                                  <!--begin::Input group-->
                                  <div class="fv-row mb-15" data-kt-buttons="true">
                                      <!--begin::Option-->
                                      <label
                                          class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                                          <!--begin::Input-->
                                          <input class="btn-check" type="radio" checked="checked" name="offer_type"
                                              value="1" />
                                          <!--end::Input-->
                                          <!--begin::Label-->
                                          <span class="d-flex">
                                              <!--begin::Icon-->
                                              <i class="ki-outline ki-fingerprint-scanning fs-3hx"></i>
                                              <!--end::Icon-->
                                              <!--begin::Info-->
                                              <span class="ms-4">
                                                  <span class="fs-3 fw-bold text-gray-900 mb-2 d-block"> ขั้นตอนที่ 1
                                                  </span>
                                                  <span class="fw-semibold fs-4 text-muted">เลือกรูปภาพของงู
                                                      โดยสามารถกดที่ปุ่ม "เลือกรูปภาพ"</span>

                                              </span>
                                              <!--end::Info-->
                                          </span>
                                          <!--end::Label-->
                                      </label>
                                      <!--end::Option-->
                                      <!--begin::Option-->
                                      <label
                                          class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6">
                                          <!--begin::Input-->
                                          <input class="btn-check" type="radio" name="offer_type" value="2" />
                                          <!--end::Input-->
                                          <!--begin::Label-->
                                          <span class="d-flex">
                                              <!--begin::Icon-->
                                              <i class="ki-outline ki-setting-3 fs-3hx"></i>
                                              <!--end::Icon-->
                                              <!--begin::Info-->
                                              <span class="ms-4">
                                                  <span class="fs-3 fw-bold text-gray-900 mb-2 d-block"> ขั้นตอนที่ 2
                                                  </span>
                                                  <span class="fw-semibold fs-4 text-muted">ครอบรูปภาพของงู
                                                      โดยสามารถลากวางกรอบเลือกจุดที่งูอยู่เพื่อเพิ่มความแม่นยำในการตรวจจับ
                                                  </span>

                                              </span>
                                              <!--end::Info-->
                                          </span>
                                          <!--end::Label-->
                                      </label>
                                      <!--end::Option-->
                                      <!--begin::Option-->
                                      <label
                                          class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                          <!--begin::Input-->
                                          <input class="btn-check" type="radio" name="offer_type" value="2" />
                                          <!--end::Input-->
                                          <!--begin::Label-->
                                          <span class="d-flex">
                                              <!--begin::Icon-->
                                              <i class="ki-outline ki-youtube fs-3hx"></i>
                                              <!--end::Icon-->
                                              <!--begin::Info-->
                                              <span class="ms-4">
                                                  <span class="fs-3 fw-bold text-gray-900 mb-2 d-block"> ขั้นตอนที่ 3
                                                  </span>
                                                  <span class="fw-semibold fs-4 text-muted">กดปุ่ม
                                                      "เริ่มการตรวจสอบชนิดงู" เพื่อตรวจจับชนิดของงูในภาพ</span>

                                              </span>

                                              <!--end::Info-->
                                          </span>

                                          <!--end::Label-->
                                      </label>
                                      <!--end::Option-->
                                  </div>
                                  <!--end::Input group-->

                              </div>
                              <!--end::Wrapper-->
                          </div>
                          <!--end::Type-->

                          <span class="badge badge-light-danger p-3">*
                              ผลลัพธ์ในการตรวจสอบอาจมีความไม่ถูกต้อง
                              ในกรณีที่ถูกงูกัดให้รีบพบแพทย์ให้เร็วที่สุด</span>


                      </form>
                      <!--end::Form-->
                  </div>
                  <!--end::Stepper-->
              </div>
              <!--begin::Modal body-->
          </div>
      </div>
  </div>
  <!--end::Modal -->
