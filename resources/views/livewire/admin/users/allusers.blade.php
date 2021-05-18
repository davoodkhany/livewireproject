<div>
    <div class="shadow card">
        <div class="card-body">
          <div class="mb-3 toolbar row">
            <div class="col">
              <form class="form-inline">
                <div class="form-row">
                  <div class="col-auto form-group">
                    <label for="search"  class="sr-only">جستجو</label>
                    <input type="text" wire:model.debounce.500ms="search" class="form-control" id="search" value="" placeholder="جستجو...">
                  </div>
                  <div class="col-auto ml-3 form-group">
                    <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref">Status</label>
                    <select class="my-1 custom-select mr-sm-2" id="inlineFormCustomSelectPref">
                      <option selected="">Choose...</option>
                      <option value="1">Processing</option>
                      <option value="2">Success</option>
                      <option value="3">Pending</option>
                      <option value="3">Hold</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>

            <div class="ml-auto col">
              <div class="float-right dropdown">
                <button class="float-right ml-3 btn btn-primary" type="button" class="mb-2 btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">کاربر جدید +</button>
                <button  class="mb-2 btn btn-warning" wire:click="export" type="button">Export User</button>
              </div>

            </div>

          </div>
          <!-- table -->
          <table class="table table-bordered">
            <thead>
              <tr role="row">
                <th >id</th>
                <th >نام</th>
                <th >ایمیل</th>
                <th>ورفای ایمیل</th>
                <th>کاربر</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @if ($user->email_verified_at=="")
                        <td class="flex-row-reverse d-flex justify-content-around" >
                            <span class="badge badge-warning">به زودی</span>
                        </td>

                    @else
                        <td>
                            <span class="badge badge-success">verified</span>

                        </td>
                    @endif
                    <td>َAdmin</td>

                    <td class="d-flex">

                        <form method="POST" action="{{ route('admin.edituser', $user) }}"  >
                            <a href="{{ route('admin.edituser', $user) }}" class="mb-2 btn btn-warning">ویرایش</a>
                        </form>



                        <button wire:click="Delete({{ $user }})" type="button" class="mb-2 ml-2 btn btn-danger">حذف</button>

                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
          <nav aria-label="Table Paging" class="mb-0 text-muted">
            <ul class="mb-0 pagination justify-content-end">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
    </div>


    <!-- Button trigger modal -->


  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form wire:submit.prevent='AddUser' class="col-md-12"  >
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">افزودن کاربر</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

                <div class="mb-3 form-group">
                  <label for="simpleinput">نام</label>
                  <input type="text" wire:model.debounce.500ms='name' id="simpleinput" class="form-control" >
                  @error('name')
                  <div class="mt-2 alert-danger alert">{{ $message }}</div>
                @enderror                </div>
                <div class="mb-3 form-group">
                  <label for="example-email">Email</label>
                  <input type="email" id="example-email" wire:model.debounce.500ms='email' name="example-email" class="form-control"  >
                  @error('email')
                  <div class="mt-2 alert-danger alert">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3 form-group">
                  <label for="example-password">Password</label>
                  <input type="text"  id="example-password" class="form-control" wire:model.debounce.500ms='password' >
                  @error('password')
                  <div class="mt-2 alert-danger alert">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="example-checkmail">verify Email</label>
                    <input type="checkbox" wire:model="email_verified_at" />
                 </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
          <button type="submit" class="btn btn-primary">افزودن شد</button>
        </div>

      </div>
    </form>
    </div>
  </div>
</div>
