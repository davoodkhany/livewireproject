<div>
    <div class="mobile-nav-wrapper">
        <div class="mobile-menu-inner">
          <ul class="mobile-menu">
            @foreach($menus as $menu)
                @if ($menu->parent =='0')
                <li class="has-sub"><a href="{{ $menu->url }}">{{ $menu->title }} <i class="sub-icon fa fa-angle-down"></i></a>
                @endif
                @if (count($menu->childs))
                    <ul class="sub-menu">
                       @foreach($menu->childs as $childs)
                        <li><a href="{{ $childs->url }}">{{ $childs->title }}</a></li>
                       @endforeach
                    </ul>
                @endif
                </li>
            @endforeach
          </ul>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
      <!-- Header -->
      <header class="site-header fixed-header">
        <div class="container expanded">
          <div class="header-wrap">
            <div class="fixed-header-logo">
              <a href="/"><img src="" alt="ویدونا"></a>
            </div>
            <div class="is-fixed-header-logo">
              <a href="/"><img src="" alt="ویدونا"></a>
            </div>
            <div class="header-nav">
                <ul class="main-menu menu_rtl">
                @foreach($menus as $menu)
                @if ($menu->parent =='0')
                <li class="menu-item-has-children menu_rtl-li"><a href="{{ $menu->url }}">{{ $menu->title }}</a>
                @endif
                    @if (count($menu->childs))
                        <ul class="sub-menu">
                        @foreach($menu->childs as $childs)
                            <li><a href="{{ $childs->url }}">{{ $childs->title }}</a></li>
                        @endforeach
                          </ul>
                    @endif
                  </li>
                @endforeach

                </ul>
            </div>
            <div class="header-widgets">
              <ul class="right-menu ">
                {{-- <li class="menu-item menu-search">
                  <a href="#search" id="menu-search-btn">
                    <i class="fa fa-search "></i>
                  </a>
                </li> --}}
                <li class="menu-item free-quote">
                  <div class="main-pink-button">
                    <a href="/about-us">همین حالا شروع کن</a>
                  </div>
                </li>
                <li class="menu-item menu-mobile-nav">
                  <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                    <span class="hamburger"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!-- Header -->
</div>
