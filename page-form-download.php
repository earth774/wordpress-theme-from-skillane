<?php
get_header();
?>
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="<?php echo home_url(); ?>">Home</a>
                    <span>About Us</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Requisitions & Forms</div>
                <h1>Download Forms</h1>
                <div class="h-decor"></div>
            </div>
            <div class="text-center max-730 mx-auto">
                <p>Test requisitions, pathology documentation, pathology consultation kit instructions, and patient billing forms are available to download here</p>
            </div>
        </div>
        <div class="container-fluid px-0 mt-3 mt-md-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="container-shift-left">
                        <div class="download-block">
                            <div class="download-block-icon">
                                <i class="icon-copy"></i>
                            </div>
                            <div class="download-block-text">
                                <h4>Laboratory Forms</h4>
                                <ul class="marker-list-md">
                                    <li><a href="#">Download General Test Request Form</a></li>
                                    <li><a href="#">Download Molecular Diagnostics Laboratory Request Form</a></li>
                                    <li><a href="#">Download Cytology Request Form (Gynaecology)</a></li>
                                    <li><a href="#">Download Quantiferon TB Gold Request Form</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="download-block">
                            <div class="download-block-icon">
                                <i class="icon-download1"></i>
                            </div>
                            <div class="download-block-text">
                                <h4>Laboratory Guidelines</h4>
                                <ul class="marker-list-md">
                                    <li><a href="#">MedlLb Testing Guideline For The Diagnosis Of Dengue</a></li>
                                    <li><a href="#">MedlLbTesting Guideline For The Diagnosis Of HIV</a></li>
                                    <li><a href="#">MedlLbTesting Guideline For The Diagnosis Of Spirosis</a></li>
                                    <li><a href="#">MedlLb Testing Guideline For The Diagnosis Of Typhoid</a></li>
                                    <li><a href="#">MedlLb Testing Guideline For The Diagnosis Of Zika</a></li>
                                    <li><a href="#">MedlLb HCV Testing Algorithm ( Version 1 )</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="download-block">
                            <div class="download-block-icon">
                                <i class="icon-patient"></i>
                            </div>
                            <div class="download-block-text">
                                <h4>Patient’s Documents</h4>
                                <ul class="marker-list-md">
                                    <li><a href="#">Download Disclaimer Form (for Patient)</a></li>
                                    <li><a href="#">Download HIV Testing Consent Form</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-4 mt-5 mt-lg-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/content/download-form-image.jpg" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();