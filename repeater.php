<section>
    <div class="container-fluid">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php
        // check if the repeater field has rows of data
        if( have_rows('carousel_slides') ):
          $i = 0;
            while ( have_rows('carousel_slides') ) : the_row();
            ?>

            <?php if($i == 0): ?>
              <li ata-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" class="active">
            <?php else: ?>
              <li ata-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>">
            <?php endif; ?>

            <!-- iterate -->
            <?php
            $i += 1;
            endwhile;
        else :
        endif;
        ?>
        </ol>
        <div class="carousel-inner">
          <?php
          // check if the repeater field has rows of data
          if( have_rows('carousel_slides') ):
            $i = 0;
            // loop through the rows of data
              while ( have_rows('carousel_slides') ) : the_row();
                  $s_image = get_sub_field('slide_image');
                  $s_title = get_sub_field('slide_title');
                  $s_descr = get_sub_field('slide_description');
                  ?>

                  <!-- set first slide as active -->
                  <?php if($i == 0): ?>
                    <div class="carousel-item <?php echo 'active';?>">
                  <?php else: ?>
                    <div class="carousel-item">
                  <?php endif; ?>

                      <!-- display slide content -->
                      <img class="d-block w-100" src="<?php echo $s_image['url'];?>" alt="<?php echo $s_image['alt']; ?>">
                      <div class="carousel-caption d-none d-md-block">
                        <h5 class="title_slide_input"> <?php echo $s_title;?> </h5>
                        <p class="desc_slide_input"> <?php echo $s_descr;?> </p>
                      </div>
                    </div>

                  <!-- iterate for active slide -->
              <?php
              $i += 1;
              endwhile;
          else :
              // no rows found
          endif;
          ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
