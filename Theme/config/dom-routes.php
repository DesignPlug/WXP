<?php use WXP\DomRouter;


 DomRouter::getInstance()
                    
                        /***********************************************************
                         * common is a reserved keyword. Any action hooked to common
                         * class will be applied to no matter what
                         * 
                         * in this case the ScriptController is including all common
                         * scripts and styles on every page
                         ***********************************************************/
         
                         ->on('common', 'Theme\Controllers\ScriptController#common')
         
                         /***********************************************************
                          * when body has the class 'single'
                          * the ScriptController fires the single method, which again
                          * includes all the scripts belonging to the single page
                          **********************************************************/
         
         
                         ->on('single', 'Theme\Controllers\ScriptController#single')
         
                         /************************************************************
                          * when the body has the class 'single-post'
                          * The ViewController fires the single_post method, which loads
                          * all relevent data and makes it accessible in the view
                          ************************************************************/
         
         
                         ->on('single-post', 'Theme\Controllers\ViewController#single_post')
         
                         //etc... I'm sure you get the point by now
                         //if not hit me up! facebook.com/theleecode
         
                         ->on('common', 'Theme\Controllers\ViewController#common')
                         ->on('blog', 'Theme\Controllers\ViewController#blog')
                         ->on('home', 'Theme\Controllers\ViewController#home')
                         ->on('home', 'Theme\Controllers\ScriptController#home')
                         ->on('error404', 'Theme\Controllers\ViewController#error404');




?>
