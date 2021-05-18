<div>
    <section class="contact-us">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner-content dir">
                <div class="block-heading">
                  <h4>فرم تماس با ما</h4>
                </div>
                <form id="message" wire:submit.prevent='ContactUs'>
                  <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <input wire:model.lazy="name" type="text" class="form-control" id="name" placeholder="نام و نام خانوادگی" required="">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <input wire:model.lazy="phone" type="text" class="form-control" id="phone"  placeholder="تلفن" required="">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                      <input wire:model.lazy="subject" type="text" class="form-control" id="subject" placeholder="موضوع" required="">
                    </div>
                    <div class="col-lg-12">
                      <textarea wire:model.lazy="message" rows="6" class="form-control" id="your-message" placeholder="پیام شما" required=""></textarea>
                    </div>
                    <div class="col-lg-12">
                      <button type="submit" id="form-submit" class="filled-button">ارسال پیام</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
