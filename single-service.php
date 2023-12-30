<?php
get_header();
?>
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <a href="<?php echo get_post_type_archive_link('service') ?>">Services</a>
                    <span><?php the_title(); ?></span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container mt-6">
            <div class="row">
                <div class="col-md">
                    <ul class="services-nav flex-column flex-nowrap">
                        <li class="nav-item">
                            <a class="nav-link" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Services</a>
                            <div class="collapse show" id="submenu1">
                                <ul class="flex-column nav">
                                    <?php 
                                    $services = get_posts([
                                        'post_type' => 'service',
                                        'numberposts' => -1,
                                    ]);
                                    
                                    foreach ($services as $service){
                                    ?>
                                        <li class="nav-item"><a class="nav-link <?php if($post->ID == $service->ID){ echo 'active'; } ?>" href="<?php echo get_permalink($service); ?>"><?php echo $service->post_title; ?></a></li>
                                    <?php 
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                        
                    </ul>
                    <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
                        <div class="col-auto col-sm col-md-auto">
                            <div class="contact-box contact-box-1">
                                <h5 class="contact-box-title">Working Time</h5>
                                <ul class="icn-list">
                                    <li><i class="icon-clock"></i>Mon-Thu 08:00 - 20:00
                                        <br>Friday 07:00 - 22:00
                                        <br>Saturday 08:00 - 18:00
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto col-sm col-md-auto">
                            <div class="contact-box contact-box-2">
                                <h5 class="contact-box-title">Contact Info</h5>
                                <ul class="icn-list">
                                    <li><i class="icon-telephone"></i>
                                        <div class="d-flex flex-wrap">
                                            <span>Phone:&nbsp;&nbsp;</span>
                                            <span>1-800-267-0000<br>
                                            1-800-267-0001</span></div>
                                    </li>
                                    <li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="question-box mt-3">
                        <h5 class="question-box-title">Ask the Experts</h5>
                        <form id="questionForm" method="post" novalidate>
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Your name*">
                            <input type="text" class="form-control" name="email" placeholder="E-mail*">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                            <textarea class="form-control" name="message" placeholder="Question*"></textarea>
                            <button type="submit" class="btn btn-sm btn-hover-fill mt-15"><i class="icon-right-arrow"></i><span>Ask Now</span><i class="icon-right-arrow"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                    <div class="title-wrap">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="service-img">
                        
                        <img src="<?php echo get_post_meta($post->ID, 'service-big', true); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="pt-2 pt-md-4">
                        <?php the_content(); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
<?php
get_footer();