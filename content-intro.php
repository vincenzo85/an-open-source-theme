	<?php
	$intro_image		= get_field('intro_image');
	$intro_h1			= get_field('intro_h1');
	$intro_span 		= get_field('intro_span');
	
	?>
	
	
	
	<section id="intro" class="pt-medium pb-medium">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center"> 
							
							
							<img src="<?php echo $intro_image;?>" id="image logo" alt="<?php echo $intro;?>"  class="animated-invisible" data-nekoanim="fadeInDown" data-nekodelay="200"/>
							<div  data-nekoanim="fadeInUp" data-nekodelay="500" class="mt animated-invisible">
								<h1 class="x-large mt"><?php  echo $intro_h1;?></h1>
								<h2>
									<span><?php echo $intro_span;?> </span>
								</h2>
							</div>

						</div>

					</div>
				</div>
			</section>