<div>

    <div class="col-lg-12">
        <div class="leave-comment">
          <div class="blog-heading">
            <h4>ارسال کامنت</h4>
          </div>
          <form id="comment" wire:submit.prevent="comment">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12">
                <input  type="text" class="form-control" id="name" wire:model.lazy="name"  placeholder="نام و نام خانوادگی" required="">
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <input  type="text" class="form-control" id="email" wire:model.lazy='email' pattern="[^ @]*@[^ @]*" placeholder="ایمیل" required="">
              </div>
              <div class="col-lg-12">
                <textarea  rows="6" class="form-control" id="message" wire:model.lazy='comment' placeholder="پیام شما" required=""></textarea>
              </div>
              <div class="col-lg-12">
                <button type="submit" id="form-submit" class="filled-button">ارسال کامنت</button>
              </div>
            </div>
          </form>
        </div>
      </div>
</div>
