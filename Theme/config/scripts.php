<?php   
        /********************************************
         * Register all scripts and styles here, and
         * use the Script Controller to enqueue them
         * as needed
         ********************************************/

        //jquery cdn
        //wp_deregister_script('jquery');
        //wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, null, false);
        

        /*****************************************
         * Register Javascript files
         ****************************************/
        
        wp_register_script("skrollr", get_template_directory_uri() .'/assets/js/plugins/skrollr/skrollr.js');
        wp_register_script("jquery_appear", get_template_directory_uri() .'/assets/js/plugins/jquery.appear/jquery.appear.js');
        wp_register_script('flexslider', get_template_directory_uri() .'/assets/js/plugins/flexslider/jquery.flexslider-min.js', "", "", true);
        wp_register_script('magnific_popup', get_template_directory_uri() .'/assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js', "", "", true); 
        wp_register_script('bootstrap_modal', get_template_directory_uri() .'/assets/js/plugins/bootstrap/modal.js', "", "", true);
        wp_register_script("bootstrap_scrollspy", get_template_directory_uri() .'/assets/js/plugins/bootstrap/scrollspy.js', "", "", true);
        wp_register_script('bootstrap_dropdown', get_template_directory_uri() .'/assets/js/plugins/bootstrap/dropdown.js', "", "", true);
        wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.7.0.min.js', false, null, false);
        wp_register_script('roots_scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', false, '01d073428e4e54f227f8a0a3bad4b804', true);
        wp_register_script("bootstrap_select", get_template_directory_uri() . '/assets/js/plugins/silviomoreto/bootstrap-select.min.js', "", "", true);
        wp_register_script('home_js', get_template_directory_uri() .'/assets/js/custom.js', "", "", true);
        wp_register_script('common_js', get_template_directory_uri() .'/assets/js/common.js', "", "", true);
        wp_register_script('input_mask', get_template_directory_uri() .'/assets/js/plugins/jquery.inputmask/min/jquery.inputmask.js', "", "", true);
        wp_register_script('jquery_validate', get_template_directory_uri() .'/assets/js/plugins/jquery.validation/jquery.validate.min.js', "", "", true);
        wp_register_script('zebra_datepicker', get_template_directory_uri() .'/assets/js/plugins/zebra-datepicker/zebra_datepicker.js', "", "", true);

        
        
        /*******************************************
         * Register CSS styles
         *******************************************/
        
        
        wp_register_style('font_awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css', false, '3.2');
        wp_register_style('animate-css', get_template_directory_uri() . '/assets/css/animate/animate.min.css', false, '3.2');   
        wp_register_style('magnific_popup-css', get_template_directory_uri() . '/assets/js/plugins/magnific-popup/magnific-popup.css', false, '3.2');
        wp_register_style('flexslider-css', get_template_directory_uri() . '/assets/js/plugins/flexslider/flexslider.css', false, '3.2');
        wp_register_style('bootstrap_select_css', get_template_directory_uri() . '/assets/js/plugins/silviomoreto/bootstrap-select.min.css', false, '3.2');       
        wp_register_style('zebra_datepicker_css', get_template_directory_uri() . '/assets/js/plugins/zebra-datepicker/css/bootstrap.css', false, '3.2');
        wp_register_style('theme_style', get_template_directory_uri() . '/assets/css/style.css', false, '6c39f42987ae297a5a21e2bb35bf3402');
        
?>