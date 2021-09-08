<!--contact us form-->



          <div class="row justify-content-center flex-column-reverse flex-md-row">
              <div class="col-md-12">
                  <form style="position: relative; direction: rtl ;" action="{{route('contact-us')}}" method="POST">
                      @csrf
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                  <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="الاسم">
                                   
                                  </div>
                                  <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="البريد الالكترونى">
                                   
                                  </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-floating mb-3">
                                    <input type="text" name="contact_no" class="form-control" id="floatingInput" maxlength="13" placeholder="رقم الهاتف">
                                  
                                  </div>
                                  <div class="form-floating mb-3">
                                    <select id="inputState" name="service_type" class="form-control ">
                                        <option selected="" disabled>نوع الخدمة</option>
                                        <option value="انشاء تطبيق جوال" >انشاء تطبيق جوال</option>
                                        <option value="انشاء موقع الكترونى" >انشاء موقع الكترونى</option>
                                        <option value="انشاء نظام ادارة" >انشاء نظام ادارة</option>
                                    </select>
                                  </div>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" placeholder="الرساله" id="floatingInput" cols="30" rows="5" style="    height: 150px;"></textarea>
                          
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 sub-btn">
                          <button onclick="return gtag_report_conversion();" type="submit" id="submit-btn" class="btn btn-danger" style=" border-radius: 10px; ">ابدأ مشروعك الان</button>
                        </div>
                      </div>
                      
                  </form>
              </div>
              
          </div>
    
<!--contact us form-->
