<?php

/**
 * Template Post Type: service
 *
 * @version 5.3.1
 */

get_header();



?>


<div class="m-auto" style="margin-top:131px;">

<div class="content">

  <div class="container m-auto">

<h2 class="single-event-page text-[#000000] m-7 overflow-hidden text-[40px] font-bold">
<?php the_title(); ?>
</h2>
</div>
</div>
</div>
<section class="relative overflow-hidden h-100 single-event-page">
  <div class="min-h-screen hero-image bg-cover flex " style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);    background-size: cover; ">
    <div class="relative container justify-center flex-col  mx-auto p-4 flex z-10">
      <div class="content justify-center mt-10">
        <div class="heading mb-3 text-7xl md:text-4xl heroSecText">
          <div class="  text-center heroSecText">
            </h2>
          </div>

        </div>


      </div>
    </div>
  </div>
</section>


<div class="content py-4">

  <div class="container m-auto">
 
    <p class="my-5">
      <?php the_content(); ?>
    </p>
    

      </div>
   


  </div>
</div>
</div>

<?php
get_footer(); ?>