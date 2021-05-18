<form wire:submit.prevent='FormHome'>
    <div class="row">
        <div class="col-lg-6">
        <input type="text" id="name" wire:model.lazy="name" placeholder="نام..." required="">
        </div>
        <div class="col-lg-6">
        <input type="email" id="email" wire:model.lazy="email" placeholder="ایمیل..." required="">
        </div>
        <div class="col-lg-6">
        <input type="text" id="phone" wire:model.lazy="phone" placeholder="شماره تلفن..." required="">
        </div>
        <div class="col-lg-6">
        <input class="row3" type="text" id="site" wire:model.lazy="site" placeholder="https://yoursite.com" required="">
        </div>
        <div class="col-lg-12">
        <button type="submit">همین حالا شروع کن</button>
        </div>
    </div>
</form>


