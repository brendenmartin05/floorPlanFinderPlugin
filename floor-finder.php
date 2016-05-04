<?php
/*
Template Name: Floor Plan Finder
*/
?>

<?php get_header();

if( have_posts() ) : the_post();

	if( post_password_required() ):
		Youxi()->templates->get( 'entry', 'protected' );
	else:

?><article <?php post_class( 'page-wrapper' ); ?> itemscope itemtype="https://schema.org/Article" >

	
	

		<?php Youxi()->templates->get( 'page-splash' ); ?>

		


				<div class="container" >
					
					<div class="row" style="background-color: rgb(210, 239, 233);" >
            <div class="col-md-12">
              <?php the_content(); ?>           
            </div>
      <div class="col-md-12 center-block" id="fpf_step_one_container">
          <div class="heading col-md-2"><span class="label label-blue label-as-badge">1</span>SORT BY</div>
          <ul id="floorplan-filters" class="nav nav-pills col-md-10">
            <li class="col-xs-12 col-sm-12 col-md-2"><a href="#" class="filter"><span></span>One Bedroom</a></li>
            <li class="col-xs-12 col-sm-12 col-md-3"><a href="#" class="filter"><span></span>One Bedroom Den</a></li>
            <li class="col-xs-12 col-sm-12 col-md-2"><a href="#" class="filter"><span></span>Two Bedroom</a></li>
            <li class="col-xs-12 col-sm-12 col-md-2"><a href="#" class="filter"><span></span>Penthouse</a></li>
            <li class="col-xs-12 col-sm-12 col-md-2 active"><a href="#" class="filter"><span></span>View All</a></li>
          </ul>
    </div>
      <div class="col-md-6" id="fpf-step-two-container">


        <div id="floors-wrapper">
          <div class="heading col-md-12"><span class="label label-blue label-as-badge">2</span>SELECT A FLOOR</div>
          <div id="floors" class="col-md-12">
            <ul class="nav nav-pills nav-stacked">
              <li class="floor-12"><a href="#floor-12" ><span class="label label-primary label-as-badge">12</span></a></li>
              <li class="floor-11"><a href="#floor-11" ><span class="label label-primary label-as-badge">11</span></a></li>
              <li class="floor-10"><a href="#floor-10" ><span class="label label-primary label-as-badge">10</span></a></li>
              <li class="floor-9"><a href="#floor-9" ><span class="label label-primary label-as-badge">9</span></a></li>
              <li class="floor-8"><a href="#floor-8" ><span class="label label-primary label-as-badge">8</span></a></li>
              <li class="floor-7"><a href="#floor-7" ><span class="label label-primary label-as-badge">7</span></a></li>
              <li class="floor-6"><a href="#floor-6" ><span class="label label-primary label-as-badge">6</span></a></li>
              <li class="floor-5"><a href="#floor-5" ><span class="label label-primary label-as-badge">5</span></a></li>
              <li class="floor-4"><a href="#floor-4" ><span class="label label-primary label-as-badge">4</span></a></li>
              <li class="floor-3"><a href="#floor-3" ><span class="label label-primary label-as-badge">3</span></a></li>
              <li class="floor-2 active"><a href="#floor-2" ><span class="label label-primary label-as-badge">2</span></a></li>
            </ul>
          </div>
           </div>
      </div>
      <div class="col-md-6"  id="fpf-step-three-container">
        <div id="building-floorplans-wrapper">
          <div class="heading col-md-12"><span class="label label-blue label-as-badge">3</span>SELECT AN APARTMENT</div>
          <div id="building-floorplans" class="col-md-12">
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="apartment-info">
      <div id="apartment-detail" class="col-md-6">
        <div id="details-top" class="row">
          <h2 class="col-md-7 col-xs-6 col-sm-6">NAME</h2>
          <div class="col-md-5 col-xs-6 col-sm-6">Desc</div>
      </div>
      <div id="details-bottom" class="row">
          <span class='status col-md-12'><h3 class="center-block"><i class="fa fa-check" aria-hidden="true"></i> Available</span></h3>
          <span class="status col-md-12"><a class='center-block btn btn-danger ' href="#">Apply Now</a></span></div>
      </div>
      <div id="apartment-image" class="col-md-6">
        <a class="image-popup-vertical-fit" href="">
          <img width="426">
        </a>
      </div>
      </div>
    </div>
  </div>
				</div>
					
						


						<?php wp_link_pages(array(
							'before' => '<div class="entry-outer-wrap"><div class="entry-wrap"><nav class="entry-nav entry-nav-link-page" itemscope itemtype="https://schema.org/SiteNavigationElement" role="navigation"><ul class="plain-list">', 
							'after' => '</ul></nav>' . str_repeat( '</div>', 2 ), 
							'separator' => '', 
							'link_before' => '<span class="page-numbers">', 
							'link_after' => '</span>'
						)); ?>

						<?php if( comments_open() || have_comments() ) : ?>

						<div class="entry-outer-wrap">

							<div class="entry-wrap">

								<?php Youxi()->templates->get( 'entry', 'comments' ); ?>

							</div>

						</div>

						<?php endif; ?>

		

</article>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/magnific-popup.js"></script>
<script type="text/javascript">
var urlBase = "<?php echo get_stylesheet_directory_uri(); ?>";
</script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

<?php
	endif;

endif;

get_footer();

