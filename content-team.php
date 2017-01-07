	<?php
	$team_head		= get_field('team_head');
	$team_subhead	= get_field('team_subhead');
	$team_footer	= get_field('team_footer');
	?>
	
 <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $team_head; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $team_subhead; ?></h3>
                </div>
            </div>
            <div class="row">
			<?php $loop = new WP_Query( array( 'post_type' => 'team') ); ?>
					<!-- start the loop about -->
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php the_field('team_img');?>" class="img-responsive img-circle" alt="">
                        <h4 class="team-name"><?php the_field('team_name');?></h4>
                        <p class="text-muted"><?php the_field('team_role');?></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="<?php the_field('team_twitter');?>"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="<?php the_field('team_facebook');?>"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="<?php the_field('team_linkedin');?>"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<!-- item -->
						<?php endwhile; wp_reset_query(); ?>
				<!-- now the loop portfolio is closed -->
		<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"><?php echo $team_footer; ?></p>
                </div>
            </div>
        </div>
    </section>

				
	
	 