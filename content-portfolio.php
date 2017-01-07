	<?php
	$portfolio_head		= get_field('portfolio_head');
	$portfolio_subhead	= get_field('porfolio_subhead');
	

	
	
	?>
	
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $portfolio_head; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $porfolio_subhead; ?></h3>
                </div>
            </div>
            <div class="row">
                
				<?php $loop = new WP_Query( array( 'post_type' => 'portfolio') ); ?>
				<!-- start the loop portfolio -->
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php the_field('img_miniatura');?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php the_field('portfolio_head');?></h4>
                        <p class="text-muted"><?php the_field('portfolio_subhead');?></p>
                    </div>
                </div>
					<?php endwhile; wp_reset_query(); ?>
				<!-- now the loop portfolio is closed -->
				
			</div>
        </div>
    </section>
	
	 