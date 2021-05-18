<div>
    <div class="main-content">

        <!-- Page Heading -->
        <div class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1>بلاگ</h1>
                <span><a href="/">خانه</a>وبلاگ ویدونا</span>
              </div>
            </div>
          </div>
        </div>


        <!-- Recent Cases -->
        <section class="blog-page">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="blog-sidebar">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="blog-widget about-me">
                        <div class="about-thumb">
                          <img src="{{ asset('/images/profile.jpeg') }}" alt="">
                        </div>
                        <h4>داود خانی</h4>
                        <p>عاشق برنامه نویسی سمت سرور و سئو سایت</p>
                        <ul class="social-icons">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-behance"></i></a></li>
                          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="blog-widget search">
                        <form>
                            <input  wire:model.debounce.500="search" type="search" name="search" value="" placeholder="جستجو..." required="">
                            <button type="submit" class="primary-button"><i class="fa fa-search"></i></button>
                        </form>
                      </div>
                    </div>



                 <livewire:publics.layouts.component.category />

                    <div class="col-lg-12">
                      <div class="blog-widget recent-posts row2">
                        <div class="blog-heading">
                          <h4>پست  های مرتبط</h4>
                        </div>
                            <livewire:publics.layouts.component.recent-articles />
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="blog-posts">
                  <div class="row">
                    @foreach($articles as $article)
                    <div class="col-lg-12">
                        <div class="blog-post">
                        <div class="blog-thumb">
                            <a href="{{ $article->path() }}"><img src="{{ $article->image }}" alt=""></a>
                        </div>
                        <div class="down-content">
                            <ul>
                            <li>{{ $article->created_at }}</li>

                            </ul>
                            <h4><a href={{ $article->path() }}>{{ $article->title }}</a></h4>
                            <p>{{ Str::limit($article->discription,100, '...') }}</p>
                            <div class="main-purple-button">
                            <a href="{{ $article->path() }}">ادامه مطلب</a>
                            </div>
                        </div>
                        </div>
                    </div>
                  @endforeach



                    <div class="col-lg-12">

                      <div class="blog-pagination">
                        {{ $articles->links('pagination::bootstrap-5') }}
                    </div>
                </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>


      </div>
</div>
