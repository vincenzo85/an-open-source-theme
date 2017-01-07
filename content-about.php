	<?php
	$about_head		= get_field('about_head');
	$about_subhead	= get_field('about_subhead');
	$about_footer	= get_field('about_footer');
	?>
	  <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $about_head; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $about_subhead; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
					<?php $loop = new WP_Query( array( 'post_type' => 'about') ); ?>
					<!-- start the loop about -->
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                        <!-- item -->
						<li class="<?php the_field('about_class');?>">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php the_field('about_img');?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php the_field('about_time');?></h4>
                                    <h4 class="subheading about-subheading"><?php the_field('about_subheading');?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php the_field('about_text');?></p>
                                </div>
                            </div>
                        </li>
						<!-- item -->
						<?php endwhile; wp_reset_query(); ?>
				<!-- now the loop portfolio is closed -->
                       
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4><?php echo $about_footer; ?></h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	
	
	
	
	
	 