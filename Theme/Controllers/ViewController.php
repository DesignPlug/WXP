<?php namespace Theme\Controllers;

use \WXP\Controller;

class ViewController extends Controller{
    
    /******************************************
     * ::common
     * common is a reserved keyword for adding
     * variables to all views. Common can be used
     * to set default values that can be overridden
     * by other methods. 
     ******************************************/
    
    function common(){

        $this->View->add('nav', 'primary_navigation')
                   ->add('layout', 'sidebar')
                   ->add('main_sidebar', 'sidebar-primary')
                   ->add('main_class', 'col-sm-8')
                   ->add('read_more_text', 'MORE')
                   ->add('content_template', $this->View->get("base_template"))

                   //base_template is a reserved keyword. by default, $base_template
                   //is the current template being used. If base_template value is
                   //changed wordpress will include the new base_template value
        
                   //->add('base_template', locate_template("base.php"));
                ;
    }
    
    /******************************************
     * ::home
     * passes data to view on the homepage 
     ******************************************/
    
    function home(){
        $this->View->add('nav', 'homepage_navigation')
                   ->add('layout_header', "frontpage")
                   ->add('layout', 'one') 
                   ->add('main_class', 'col-sm-12');
    }
        
    /******************************************
     * ::blog
     * passes data to view on the blogpage 
     ******************************************/
    
    function blog(){
        
        $post_page_id = get_option('page_for_posts', true);
        $header_image = wp_get_attachment_image_src( get_post_thumbnail_id($post_page_id), 'full');
        $this->View->add('main_header_image', $header_image[0])
                   ->add('main_header_title', get_the_title($post_page_id))
                   ->add('main_header_content', get_post_field('post_content', $post_page_id))
                   ->add('main_header_tags', wp_get_post_tags($post_page_id))
                   ->add("layout_header", "post")
                   ->add('layout', 'sidebar') 
                   ->add('read_more_text', 'READ MORE')
                   ->add('item_type', 'post')
                   ->add("content_template", locate_template("views/posts/lists/list.php"));
    }
    
        
    /*********************************************
     * ::single_post
     * passes data to view on the single post page 
     *********************************************/
    
    function single_post(){
        
        $header_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'dp-post-thumb-header');

        $this->View->add('main_header_image', $header_image)
                   ->add('main_header_title', $post->post_title)
                   ->add('main_header_content', $post->post_excerpt)
                   ->add('main_header_tags', get_the_tags())
                   ->add("layout_header", "post")
                   ->add("content_template", locate_template("views/posts/view/post.php"));
        
    }
    
        
    /*********************************************
     * ::error404
     * passes data to view on the 404 page 
     *********************************************/
    
    function error404(){
        $this->View->add("content_template", locate_template("views/errors/error-404.php"));
    }
}

?>
