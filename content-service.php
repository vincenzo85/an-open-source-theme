	<?php
	$service_head		= get_field('service_head');
	$service_subhead	= get_field('service_subhead');
	$service_ahead		= get_field('service_ahead');
	$service_asubhead	= get_field('service_asubhead');
	$service_bhead		= get_field('service_bhead');
	$service_bsubhead	= get_field('service_bsubhead');
	$service_chead		= get_field('service_chead');
	$service_csubhead	= get_field('service_csubhead');
	
	
	?>
	
	
	
	   <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $service_head; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $service_subhead; ?></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php echo $service_ahead; ?></h4>
                    <p class="text-muted"><?php echo $service_asubhead; ?></p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php echo $service_bhead; ?></h4>
                    <p class="text-muted"><?php echo $service_bsubhead; ?></p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php echo $service_chead; ?></h4>
                    <p class="text-muted"><?php echo $service_chead; ?></p>
                </div>
            </div>
        </div>
    </section>