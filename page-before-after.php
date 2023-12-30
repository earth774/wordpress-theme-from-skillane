<?php
get_header();
?>
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span>Success Stories</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section prices-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2 mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Before & After</div>
                <h1>Weight Loss Success Stories</h1>
                <div class="h-decor"></div>
            </div>
            <p class="max-670 mx-auto text-center">Life-changing revelations can come when you least expect it. Check out these unexpected weight-loss lessons from people who have been battling their weight for decades.</p>
        </div>
        <div class="container mt-5 mt-md-8">
            <?
            $successstories = get_posts([
                'post_type' => 'successstory'
            ]);
            
            $i = 0;
            foreach ($successstories as $successstory){
                $i++;
            ?>
                <div class="before-after <?php if($i % 2 == 0){ echo ' before-after--reverse '; } ?>">
                <div class="before-after-image">
                    <img src="<?php echo get_post_meta($successstory->ID, 'before-after', true); ?>" alt="">
                </div>
                <div class="before-after-text">
                    <div class="before-after-label">
                        <span>Lost</span>
                        <span class="before-after-weight"><?php echo get_post_meta($successstory->ID, 'lost', true); ?></span>
                        <span>Pounds</span>
                    </div>
                    <h5 class="before-after-name"><?php echo $successstory->post_title; ?> <span>( <?php echo get_post_meta($successstory->ID, 'age', true); ?> y.o.)</span></h5>
                    <?php echo $successstory->post_content; ?>
                </div>
                <div class="before-after-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/content/img-bg-before-after.png" alt="">
                </div>
            </div>
            <?
            }
            ?>
        </div>
        <!--//section-->
    </div>
    <!--//section prices-->
<?php
get_footer();