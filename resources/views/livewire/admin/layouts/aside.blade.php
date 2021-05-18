<div>
    <aside class="bg-white shadow sidebar-left border-right" id="leftSidebar" data-simplebar>
        <a href="#" class="mt-3 ml-2 btn collapseSidebar toggle-btn d-lg-none text-muted" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="mb-4 w-100 d-flex">
            <a class="mx-auto mt-2 text-center navbar-brand flex-fill" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <ul class="mb-2 navbar-nav flex-fill w-100">
            <li class="nav-item dropdown">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
              </a>
              <ul class="pl-4 collapse list-unstyled w-100" id="dashboard">
                <li class="nav-item active">
                  <a class="pl-3 nav-link" href="./index.html"><span class="ml-1 item-text">Default</span></a>
                </li>
                <li class="nav-item">
                  <a class="pl-3 nav-link" href="./dashboard-analytics.html"><span class="ml-1 item-text">Analytics</span></a>
                </li>
                <li class="nav-item">
                  <a class="pl-3 nav-link" href="./dashboard-sales.html"><span class="ml-1 item-text">E-commerce</span></a>
                </li>
                <li class="nav-item">
                  <a class="pl-3 nav-link" href="./dashboard-saas.html"><span class="ml-1 item-text">Saas Dashboard</span></a>
                </li>
                <li class="nav-item">
                  <a class="pl-3 nav-link" href="./dashboard-system.html"><span class="ml-1 item-text">Systems</span></a>
                </li>
              </ul>
            </li>
          </ul>
          <p class="mt-4 mb-1 text-muted nav-heading">
            <span>User</span>
          </p>
          <ul class="mb-2 navbar-nav flex-fill w-100">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">کاربران</span>
              </a>
              <ul class="pl-4 collapse list-unstyled w-100" id="ui-elements">
                <li class="nav-item">
                  <a class="pl-3 nav-link" href="{{ asset(route('admin.alluser')) }}"><span class="ml-1 item-text">همه کاربران</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>

        </nav>
      </aside>
</div>
