<?php namespace Theme\Controllers;


class ScriptController {
    
        
    /*********************************
     *   ENQUEUE GLOBAL SCRIPTS/STYLES
     *********************************/
    
    function common(){
        /*
        wp_enqueue_script("jquery");
        wp_enqueue_script("skrollr"); 
        wp_enqueue_script("jquery_appear"); 
        wp_enqueue_script('bootstrap_dropdown');
        wp_enqueue_script('modernizr');
        wp_enqueue_script('roots_scripts');
        
        wp_enqueue_style('font_awesome');
        wp_enqueue_style('animate-css');
        */
        
        //make sure certain common scripts are included last
        
        //add_action("WXP.DomRoute.after", array($this, 'lastCommon'));
    }
    
    /*************************************
     *   ENQUEUE HOMEPAGE SCRIPTS/STYLES
     *************************************/
    
    function home(){
        /*
        wp_enqueue_style('flexslider-css');
        wp_enqueue_style('magnific_popup-css'); 
        wp_enqueue_style('bootstrap_select_css'); 
        wp_enqueue_style('zebra_datepicker_css'); 
        
        
        wp_enqueue_script('flexslider');
        wp_enqueue_script('magnific_popup');
        wp_enqueue_script('bootstrap_modal');
        wp_enqueue_script('bootstrap_scrollspy');
        wp_enqueue_script('bootstrap_select');
        wp_enqueue_script('zebra_datepicker');
        wp_enqueue_script('input_mask');
        wp_enqueue_script('jquery_validate');
        */
        /*
        add_action("WXP.DomRoute.after", function(){
            wp_enqueue_script('home_js');
        });
         * 
         */
        
    }
    
    function blog(){
       // echo 3;
    }
    
    function single(){
        /**
        if (comments_open() && get_option('thread_comments')) {
           wp_enqueue_script('comment-reply');
        }
         * 
         */
    }
    
    /******************************************
     *   ENQUEUE FINAL COMMON SCRIPTS/STYLES 
     *****************************************/    
    
    function lastCommon(){
        
        wp_enqueue_script('common_js');
        
        wp_enqueue_style('theme_style');
    }
    
}

?>
