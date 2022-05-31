
<?php get_header(); ?>
<!--page content-->

 <?php $head = get_field('head'); ?>
<header>
  <div class="head">
<img src="<?php echo get_template_directory_uri().'/build/img/plus_sign.svg'; ?>" alt="plus-icon" class="plus-icon">
      <img src="<?php echo get_template_directory_uri().'/build/img/green-circle-fade.svg'; ?>" alt="green-circle" class="green-circle">

      <div class="row text-lg-start text-center">
        <div class="col-xl-5 col-lg-5 col-md-12 head-menu">
          <h1 class="heading-1"><?php echo $head['head_heading']; ?></h1>

          <!-- Explore and Travel -->

            <div class="dropdowns">
              <h2><?php echo $head['second_heading']; ?></h2>

                <!-- Holiday finder -->

              <hr class="ms-lg-0 mx-auto">
                <!-- Example split danger button -->
              <form action="" class="d-flex">

                <div class="ms-lg-0 mx-auto">
                <select class="form-select btn drop" aria-label="Default select example">
                  <option selected>Location</option>

                  <?php
                  $loc_option = $head['locations_options'];
                  $loc_value = 0;
                  if($loc_option) {
                  foreach ($loc_option as $row) {
                  $options = $row['options'];
                  $loc_value = $loc_value + 1;
                  ?>

                  <option value="<?php echo $loc_value ?>"><?php echo $options; ?></option>

                  <?php 
                  }
                  } 
                  ?>
              
                </select>
                </div>

                <div class="two-group ms-lg-0 mx-auto">
                  <select class="form-select btn drop" aria-label="Default select example">
                    <option selected>Activity</option>

                    <?php
                    $act_option = $head['activity_options'];
                    $act_value = 0;
                    if($act_option) {
                    foreach ($act_option as $row) {
                    $opt = $row['act'];
                    $act_value = $act_value + 1;
                    ?>

                    <option value="<?php echo $act_value ?>"><?php echo $opt; ?></option>

                    <?php 
                    }
                    } 
                    ?>

                  </select>
                </div>
                
              </form>

              <form action="" class="d-flex">

              <div class="ms-lg-0 mx-auto">
                <select class="form-select btn drop" aria-label="Default select example">
                    <option selected>Grade</option>

                    <?php
                    $grd_option = $head['grade_options'];
                    $grd_value = 0;
                    if($grd_option) {
                    foreach ($grd_option as $row) {
                    $grd_opt = $row['grad'];
                    $grd_value = $grd_value + 1;
                    ?>

                    <option value="<?php echo $grd_value ?>"><?php echo $grd_opt; ?></option>

                    <?php 
                    }
                    } 
                    ?>

                  </select>
              </div>
                
              <div class="two-group ms-lg-0 mx-auto">
                <div class="input-holder">
                  <input class="btn drop p" placeholder="Date" type="text" id="datepicker">
                  <span class="fa fa-solid fa-chevron-down" id="fa-1"></span> 
                  </div>

              </div>
                </form>

                <button href="<?php echo $head['explore']; ?>" 
                type="button" class="btn btn-exp"><?php echo $head['explore_text']; ?></button>

                <!-- Explore -->

                  </div>
              </div>
              <div class="col-xl-7 col-lg-7 order-first order-lg-0 col-md-12">
                <img src="<?php echo $head['traveller']; ?>" alt="traveller-pic" class="img-responsive traveller">

                <!-- get_template_directory_uri().'/assets/img/traveller.svg' -->

            </div>
          </div>
        </div>
    </header>

<?php $descrp = get_field('descrp');?>
<section class="descrp">
      <div class="container-fluid">

      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6"> </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <img src="<?php echo get_template_directory_uri().'/build/img/plus_sign.svg'; ?>" alt="plus-icon" class="plus-icon">
          </div>
        
          <div class="row text-lg-start text-center">

          <div class="col-lg-6 col-md-12 mx-auto">
            <img src="<?php echo $descrp['balloon_traveller']; ?>" alt="balloon-traveller-pic" class="balloon-traveller">

            <!-- '/assets/img/balloon-traveller.svg' -->
          </div>

          <div class="col-lg-6 col-md-12 mx-auto">
           <h1><?php echo $descrp['main_title'];?></h1>

           <!-- A new way to explore the world -->

           <p><?php echo $descrp['main_content'];?></p>

           <!-- For decades travellers have reached for Lonely Planet books when looking 
             to plan and execute their perfect trip, but now, they can also let Lonely
              Planet Experiences lead the way -->

              <button type="button" class="btn btn-exp"><?php echo $descrp['button'];?></button>
              <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7"> </div>
          <div class="col-lg-5 col-md-5 col-sm-5">
            <img src="<?php echo get_template_directory_uri().'/build/img/green-circle-fade.svg'; ?>" alt="green-circle" class="green-circle">
          </div>

              <!-- Learn more -->
          </div>
        </div>
      </div>
    </section>

    <?php $dest = get_field('dest'); ?>
<section class="dest" id="dest">
    <div class="container-fluid justify-content-center">
        <img src="<?php echo get_template_directory_uri() . '/build/img/plus_sign.svg'; ?>" alt="plus-icon" class="plus-icon">
        <img src="<?php echo get_template_directory_uri() . '/build/img/green-circle-fade.svg'; ?>" alt="green-circle" class="green-circle">
        
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8"> </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <img src="<?php echo get_template_directory_uri() . '/build/img/green-circle-fade.svg'; ?>" alt="green-circle" class="green-circle-2">
          </div>
        </div>

        <div class="d-flex mx-auto">

            <h1>
                <?php echo $dest['main_heading']; ?>
            </h1>
            <!-- Featured destinations -->
            <!-- Split dropend button -->
            <div class="btn-group dropend ms-auto view-button">
                <a href="<?php echo $dest['view_all_link']; ?>" type="button" class="btn view-b">
                    <?php echo $dest['view_all']; ?>
                </a>
                <!-- View all -->
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo get_template_directory_uri() . '/build/img/frame-down.svg'; ?>" alt="arrow-pic" class="frame">
                    <span class="visually-hidden">Toggle Dropright</span>
                </button>
                <ul class="dropdown-menu">
                    <!-- Dropdown menu links -->
                    <li><a class="dropdown-item" href="<?php echo $dest['view_all_link']; ?>">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>

        <div class="row d-flex mx-auto">
          <?php
               $args = array(  
                'post_type' => 'places',
                'post_status' => 'publish',
                'posts_per_page' => 4, 
                'orderby' => 'title', 
                'order' => 'ASC', 
            );
        
            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post();  
            $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 p-2 my-4">
            <div class="card" 
                style="background-image: url('<?php echo $url; ?>');">
                <div class="place">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <!-- Raja Ampat -->
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <!-- Indonesia -->
                    </div>
                </div>
            </div>
            
          <?php  endwhile;
        
            wp_reset_postdata(); 
          ?>             
                   
        </div>
    </div>
</section>
   
    <section class="guides">
    <?php $guides = get_field('guides');?>
      <div class="hello container-fluid">
        <div class="row main-row text-lg-start text-center">

          <div class="col-lg-6 col-md-12 mx-auto">
            
          <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3"></div>
          <div class="col-lg-9 col-md-9 col-sm-9">
            <img src="<?php echo get_template_directory_uri().'/build/img/green-circle-fade.svg'; ?>" alt="green-circle" class="green-circle">
          </div>
          </div>  

            <h1>
            <?php echo $guides['heading']; ?>
            </h1>

            <!-- Guides by Thousand Sunny -->
 
            <p>
              <?php echo $guides['sub_text']; ?>
            </p>

           <!--  Packed with tips and advice from our on-the-ground experts. our city guides app 
              (iOS and Android) is the ultimate resource before and during a trip. -->
 
               <button type="button" class="btn btn-exp">
               <?php echo $guides['download_button']; ?>
               </button>

               <!-- Download -->

               <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10"></div>
          <div class="col-lg-2 col-md-2 col-sm-2">
            <img src="<?php echo get_template_directory_uri().'/build/img/plus_sign.svg'; ?>" alt="plus-icon" class="plus-icon">
          </div>
          </div>

          </div>

          <div class="col-lg-6 order-first order-lg-0 col-md-12 mx-auto">

          <div class="row">
          <div class="col-lg-11 col-md-11 col-sm-11"></div>
          <div class="col-lg-1 col-md-1 col-sm-1">
            <img src="<?php echo get_template_directory_uri().'/build/img/plus_sign.svg'; ?>" alt="plus-icon" class="plus-rot-icon">
          </div>
          </div> 

            <img src="<?php echo $guides['guide_traveller']; ?>" alt="guide-traveller-pic" class="guide-traveller">
            <!-- '/assets/img/guide-traveller.svg' -->
          </div>
        </div>
      </div>
    </section>

    <?php $testy = get_field('testimonial');?>
    <section class="testimonial">

      <div class="container-fluid">
        <h1>
        <?php echo $testy['h1']; ?>
        </h1>

        <!-- Testimonials -->

        <div class="row text-lg-start text-center">

          <div class="col-lg-6 col-md-12 mx-auto">
            

            <div class="review">

                <ul class="star-group d-flex">

                  <?php
                  $rate = $testy['rating'];
                  for ($x = 0; $x < $rate; $x++) 
                  {         
                  ?>

                  <li><img src="<?php echo get_template_directory_uri().'/build/img/star.svg'; ?>" alt="star-pic" class="star"></li>
                       
                  <?php
                  }
                   ?>

                </ul>

                <p class="comment">
                  <?php echo $testy['comment']; ?>
                </p>

                <!-- “Quisque in lacus a urna fermentum euismod. Integer mi nibh,
                   dapibus ac scelerisque eu, facilisis quis purus. Morbi blandit sit amet turpis
                    nec” -->

                <h2 class="person">
                  <?php echo $testy['user_name']; ?>
                </h2>

                <!-- Edward Newgate -->

                <p class="position">
                  <?php echo $testy['user_position']; ?>
                </p>

                <!-- Founder Circle -->

            </div>

          </div>

          <div class="col-lg-6 order-first order-lg-0 col-md-12 mx-auto">
            <img src="<?php echo get_template_directory_uri().'/build/img/green-circle-fade.svg'; ?>" alt="green-circle" class="green-circle" width="50px">
             

            <div class="photo" style="background-image: url('<?php echo $testy['user_image']; ?>');">

            <!-- get_template_directory_uri()."/assets/img/man.svg" -->
              
              <div class="slider">
                <button type="button" class="btn prev"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn nxt"><i class="fa fa-chevron-right"></i></button>
              </div>
            </div>

            <div class="row">
          <div class="col-0 col-md-4 col-sm-8"> </div>
          <div class="col-lg-12 col-md-8 col-sm-4">
            <img src="<?php echo get_template_directory_uri().'/build/img/plus_sign.svg'; ?>" alt="plus-icon" class="plus-icon" width="50px">
          </div>
        </div>

          </div>

        </div>
      </div>
    </section>

    <?php $trending = get_field('trending');?>

    <section class="trending">
      <div class="container-fluid justify-content-center">

        <div class="row">
          <div class="col-4"> </div>
          <div class="col-lg-8">
            <img src="<?php echo get_template_directory_uri().'/build/img/plus_sign.svg'; ?>" alt="plus-icon" class="plus-icon">
          </div>
        </div>

        <div class="d-flex mx-auto">
          
          <h1>
            <?php echo $trending['heading'];?>
          </h1>
          
          <!-- Trending stories -->

            <!-- Split dropend button -->
            <div class="btn-group dropend ms-auto view-button">
               <button type="button" class="btn view-b">
               <?php echo $trending['link_text']; ?>
               </button>
               
               <!-- View all -->

               <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
               <img src="<?php echo get_template_directory_uri().'/build/img/frame-down.svg'; ?>" alt="arrow-pic" class="frame">
               <span class="visually-hidden">Toggle Dropright</span>
               </button>
               <ul class="dropdown-menu">
                  <!-- Dropdown menu links -->
                  <li><a class="dropdown-item" href="<?php echo $trending['link']; ?>">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
               </ul>
            </div>
        </div>

        <?php $args = array('category)_name' => 'story'); 
        $front_page_query = new WP_Query( $args );
        ?>

        <div class="row d-flex">
        <img src="<?php echo get_template_directory_uri().'/build/img/green-circle-fade.svg'; ?>" alt="green-circle" class="green-circle">
        
         <?php
        

        while ( $front_page_query->have_posts() ) : $front_page_query->the_post();
        $url_story = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        
      ?>
         

          <div class="card col-xl-3 col-lg-3 col-md-6 col-sm-12 p-2 my-4"
          style="background-image: url('<?php echo $url_story; ?>');">
            
          <div class="place yoga-place">
            <h5 class="card-title">
              <?php the_title(); ?>
            </h5>

            <!-- The many benefits of taking a healing holiday-->
             
              <p class="card-text">
                <?php the_excerpt(); ?>
              </p>

              <!-- ‘Healing holidays’ are on the rise 
                to help maximise your health and happiness... -->

              <a href="<?php the_permalink(); ?>" class="btn">
              
              <?php echo $trending['read_more']; ?>
              </a>


              <!--Read more-->
         </div>
          </div>

          <?php
            endwhile;
            wp_reset_postdata(); 
            ?>

          <!-- <div class="card col-xl-3 col-lg-3 col-md-6 col-sm-12 p-2 my-4"
          style="background-image: url('<?php echo get_template_directory_uri()."/build/img/food.svg"; ?>');">
            
            <div class="place">
              <h5 class="card-title">The best Kyoto restaurant
                to try Japanese food</h5>
              <p class="card-text">From tofu to teahouses, here’s our guide to Kyoto’s best restaurants
                to visit...</p>
              <a href="#" class="btn">Read more</a>
            </div>
          </div>

          <div class="card col-xl-3 col-lg-3 col-md-6 col-sm-12 p-2 my-4"
          style="background-image: url('<?php echo get_template_directory_uri()."/build/img/relic.svg"; ?>');">
            
            <div class="place">
              <h5 class="card-title">Skip Chichen Itza and head
                to this remote Yucatan</h5>
              <p class="card-text">It’s remote and challenging to get,
                but braving the jungle and exploring
                these ruins without the...</p>
              <a href="#" class="btn">Read more</a>
            </div>
          </div>

          <div class="card col-xl-3 col-lg-3 col-md-6 col-sm-12 p-2 my-4"
          style="background-image: url('<?php echo get_template_directory_uri()."/build/img/wave.svg"; ?>');">
            
            <div class="place">
              <h5 class="card-title">Surf’s up at these beginner
                spots around the world</h5>
              <p class="card-text">If learning to surf has in on your to-
                do list for a while, the good news
                is: it’s never too late...</p>
              <a href="#" class="btn">Read more</a>
            </div>
          </div> -->

        </div>
      </div>

      <div class="row">
          <div class="col-8"> </div>
          <div class="col-lg-4">
          <img src="<?php echo get_template_directory_uri().'/build/img/green-circle-fade.svg'; ?>" alt="green-circle" class="green-circle-2">
          </div>
        </div>

    </section>

    <button class="back-to-top hidden">
    <svg
    xmlns="http://www.w3.org/2000/svg"
    class="back-to-top-icon"
    fill="none"
    viewBox="0 0 24 24"
    stroke="currentColor"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M7 11l5-5m0 0l5 5m-5-5v12"
    />
  </svg>
    </button>
    
    <!--page content end-->
    <?php get_footer(); ?>