<!--section-->
<div class="section bg-dotted">
	<div class="container-fluid">
		<div class="title-wrap text-center">
			<h2 class="h1 double-title double-title--white double-title--center double-title--vcenter" data-title="Our Services"><span>General Services</span></h2>
			<div class="h-decor"></div>
		</div>
		<div class="row service-card-style4-carousel js-service-card-style4-carousel">

            <?php
                $services = get_posts([
                    'post_type' => 'service'
                ]);

                foreach ($services as $index => $service) :
            ?>

			<div class="col-md-6 col-lg-3">
				<a href="<?php echo get_permalink($service)?>" class="service-card-style4">
					<div class="service-card-img">
                        <?php echo get_the_post_thumbnail($service->ID, 'full' ) ?> 
					</div>
					<h5 class="service-card-name"><?=$service->post_title; ?></h5>
					<div class="service-card-bg">
						<i class="<?php echo get_post_meta($service->ID,'icon',true) ?>"></i>
						<h5 class="service-card-name"><?=$service->post_title; ?></h5>
						<p><?=$service->post_excerpt; ?></p>
						<span class="btn-plus">+</span>
						<div class="service-card-img-num"><?=$index+1?></div>
					</div>
				</a>
			</div>

            <?php 
                endforeach; 
            ?>
            
		</div>
	</div>
</div>
<!--//section-->