  <!--begin::Modal -->
  <div class="modal fade" id="modal_policy" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-1000px">
          <!--begin::Modal content-->
          <div class="modal-content">
              <!--begin::Modal header-->
              <div class="modal-header py-7 d-flex justify-content-between">
                  <!--begin::Modal title-->
                  <h2>เงื่อนไขการใช้งาน</h2>
                  <!--end::Modal title-->
                  <!--begin::Close-->
                  <a href="{{ route('snake.home') }}">
                      <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                          <i class="ki-outline ki-cross fs-1"></i>
                      </div>
                  </a>
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
                              <h3 class="stepper-title">เงื่อนไขการใช้งาน
                              </h3>
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
                                          <h2>การใช้งานเว็บไซต์</h2>
                                          <p> เมื่อคุณใช้งานเว็บไซต์นี้, คุณยอมรับว่าจะไม่อัปโหลดรูปภาพที่มีลิขสิทธิ์,
                                              ไม่เหมาะสม, หรือเป็นการละเมิดสิทธิของผู้อื่น.
                                          </p>
                                          <h2>การรับประกันและการจำกัดความรับผิดชอบของเรา

                                          </h2>
                                          <p>เว็บแอปพลิเคชันนี้ไม่รับประกันความถูกต้องหรือความน่าเชื่อถือของผลการทำนายชนิดของงู.
                                              เว็บแอปพลิเคชันนี้และบริการทั้งหมดนำเสนอเพียง "ความน่าจะเป็น"
                                              โดยมีฐานข้อมูลงูทั้งหมดเพียง 23 ชนิดเท่านั้น
                                              กรณีที่ถูกงูกัด เพื่อความปลอดภัย ควรพาผู้ที่ถูกงูกัดพบแพทย์ทุกครั้ง</p>
                                          <h2>การเปลี่ยนแปลงนโยบาย
                                          </h2>
                                          <p>เราอาจปรับปรุงนโยบายความเป็นส่วนตัวและเงื่อนไขการใช้งานนี้เป็นครั้งคราว.
                                              เราแนะนำให้คุณตรวจสอบเอกสารนี้อย่างสม่ำเสมอเพื่อทราบถึงการเปลี่ยนแปลงใดๆ.
                                          </p><br>
                                          <span class="badge badge-secondary fs-3">หากปฏิเสธ
                                              เราจะพาท่านกลับสู่หน้าหลักของเว็บแอปพลิเคชัน</span>
                                      </div>
                                      <!--end::Description-->
                                  </div>
                                  <!--end::Heading-->


                              </div>
                              <!--end::Wrapper-->
                          </div>
                          <!--end::Type-->






                      </form>

                      <div class="btn-group">
                          <button data-bs-dismiss="modal" type="button"
                              class="btn btn-primary fw-bolder px-9 py-4 me-4">
                              ยอมรับ
                          </button>
                          <a href="{{ route('snake.home') }}" type="button" class="btn btn-danger fw-bolder px-9 py-4">
                              ปฏิเสธ
                          </a>
                      </div>
                      <!--end::Form-->
                  </div>
                  <!--end::Stepper-->
              </div>
              <!--begin::Modal body-->
          </div>
      </div>
  </div>
  <!--end::Modal -->

  @push('scripts')
      <script>
          function hiddenModal() {

              $('#modal_policy').modal('hidden');
          }
      </script>
  @endpush
