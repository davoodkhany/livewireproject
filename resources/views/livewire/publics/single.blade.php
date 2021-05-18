 <div>

    <div class="main-content">

        <!-- Page Heading -->
        <div class="dark-page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1>{{ $article->title }}</h1>
                <span><a href="/article">وبلاگ</a>{{ $article->title }}</span>
              </div>
            </div>
          </div>
        </div>


        <!-- Recent Cases -->
        <section class="blog-page">
          <div class="container">
            <div class="row row2 ">
              <div class="col-lg-8">
                <div class="blog-posts">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="blog-post post-details">
                        <div class="blog-thumb">
                          <a href="single-post.html"><img src="/images/blog-item-01.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                          <ul>

                            <li>{{ $article->created_at }}</li>

                          </ul>
                          <h4>{{ $article->title }}</h4>
                            <div>
                                {!! $article->body !!}
                            </div>
                        </div>
                      </div>
                    </div>

                        <livewire:publics.layouts.component.comment />
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="blog-sidebar">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="blog-widget about-me">
                        <div class="about-thumb">
                          <img src="{{ asset('/images/profile.jpeg') }}" alt="">
                        </div>
                        <h4>داود خانی</h4>
                        <p>عاشق برنامه نویسی سمت سرور و سئو سایت، متخصص گوگل آنالیتیکس، گوگل ادز و گوگل تگ منیجر</p>
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
                            <input type="search" value="" placeholder="Type to search..." required="">
                            <button type="submit" class="primary-button"><i class="fa fa-search"></i></button>
                        </form>
                      </div>
                    </div>

                    <livewire:publics.layouts.component.category />

                    <div class="col-lg-12">
                      <div class="blog-widget recent-posts">
                        <div class="blog-heading">
                          <h4>
                            پست های مرتبط
                            </h4>
                        </div>
                            <livewire:publics.layouts.component.recent-articles />
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



