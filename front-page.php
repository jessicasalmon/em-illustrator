<?php

// front-page.php template controls the home page

get_header(); ?>

<!-- gallery grid system  -->
<div class="row">
  <div class="col-12 col-bkg">

    <div class="table-container">
      <div class="table">

        <div class="table-row">

          <!-- Background Slytherin -->
          <div class="table-cell">
            <?php
              // Get the ID of a given category
              $category_id = get_cat_ID( 'My Life As a Background Slytherin' );
              // Get the URL of this category
              $category_link = get_category_link( $category_id );
            ?>

            <!-- Print a link to this category -->
            <a href="<?php echo esc_url( $category_link ); ?>" title="My Life As a Background Slytherin">
              <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/1-background-slytherin-600x600.png" />
            </a>
          </div>

          <!-- Bloodlust and Bonnets-->
          <div class="table-cell">
            <a href="<?php echo get_page_link( get_page_by_title( 'Bloodlust and Bonnets' )->ID ); ?>">
              <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/2-bloodlust-and-bonnets-600x600.png" />
            </a>
          </div>

        </div>

        <div class="table-row">

          <!-- Comics -->
          <div class="table-cell">
            <?php
              $category_id = get_cat_ID( 'Comics' );
              $category_link = get_category_link( $category_id );
            ?>

            <a href="<?php echo esc_url( $category_link ); ?>" title="Comics">
              <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/3-comics-600x600.png" />
            </a>
          </div>

          <!-- Published Work -->
          <div class="table-cell">
            <?php
              $category_id = get_cat_ID( 'Published Work' );
              $category_link = get_category_link( $category_id );
            ?>

            <a href="<?php echo esc_url( $category_link ); ?>" title="Published Work">
              <img class="homepage-image" src="<?= get_template_directory_uri()?>/assets/homepage-images/4-published-work-600x600.png" />
            </a>
          </div>

        </div>

      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
