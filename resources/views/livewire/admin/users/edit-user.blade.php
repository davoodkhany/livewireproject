<div>
    <form wire:submit.prevent='EditUser' class="col-md-6" >
        <div class="mb-3 form-group">
          <label for="simpleinput">نام</label>
          <input type="text" wire:model.debounce.500ms='name' id="simpleinput" class="form-control" value="{{ $name }}">
        </div>
        <div class="mb-3 form-group">
          <label for="example-email">Email</label>
          <input type="email" id="example-email" wire:model.debounce.500ms='email' name="example-email" class="form-control" value="{{ $email }}" >
        </div>
        <div class="mb-3 form-group">
          <label for="example-password">Password</label>
          <input type="text"  id="example-password" class="form-control" wire:model.debounce.500ms='password_nohash'  value="{{ $password_nohash }}">
        </div>
        <div class="mb-3 form-group">
            <label for="example-checkmail">verify Email</label>
            <input type="checkbox"wire:model.debounce.500ms="email_verified_at"   {{  !($email_verified_at == null) ?  "checked" : ""  }}  >
         </div>

        <div class="mb-3 form-group">
            <input type="submit"  class="form-control btn btn-info"  value="submit"/>
        </div>
        </form>
</div>
