
<?php use Illuminate\Support\Facades\DB; ?>

<x-blog_index>

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets_frontend/img/post-slide-1.jpg');">
                    <div class="img-bg-inner">
                      <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets_frontend/img/post-slide-2.jpg');">
                    <div class="img-bg-inner">
                      <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets_frontend/img/post-slide-3.jpg');">
                    <div class="img-bg-inner">
                      <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('assets_frontend/img/post-slide-4.jpg');">
                    <div class="img-bg-inner">
                      <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                  

                  {{-- @unless(count($blogs) == 0)

                  @foreach($blogs as $blog)
                   <x-all_blogs :blog ="$blog"/> 
                  @endforeach

                  @else
                  <p>No blogs found</p>
                  @endunless --}}

                  <?php
                  
                  
                  if (DB::table('blogs')->exists()) {
                    $blogs = DB::table('blogs')->get();
                  
                  foreach ($blogs as $blog) { ?>
                      
                  <a href="/show"><img src="assets_frontend/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                  <div class="post-meta"><span class="date">{{$blog->category}}</span> <span class="mx-1">&bullet;
                    </span> <span>{{$blog->updated_at}}</span></div>
                  <h2><a href="/show">{{$blog->title}}</a></h2>
                  <?php }
                }
                
                if (DB::table('blogs')->doesntExist()) {
                    echo "No records found";
                }
               
               ?>

                </div>
                
              

              
 

              <!-- Trending Section -->
              {{-- <div class="col-lg-4">

                <div class="trending">
                  <h3>Trending</h3>
                  <ul class="trending-post">
                    <li>
                      <a href="single-post.html">
                        <span class="number">1</span>
                        <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                        <span class="author">Jane Cooper</span>
                      </a>
                    </li>
                   
                  </ul>
                </div>

              </div>  --}}<!-- End Trending Section -->
          

        </div> <!-- End .row -->

        
      </div>
    </section> <!-- End Post Grid Section -->

   

</x-blog_index>
  