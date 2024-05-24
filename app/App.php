<?php
namespace Cr0\YoghPlugin;
if ( ! defined( 'ABSPATH' ) ) {
    die( 'not allowed' );
}
/**
 *  Main class to add custom functionality, using singleton pattern
 */
class App
{    
    private static $instance = null;
    /**
     * define private constructor on class
     *
     * @return void
     */
    private function __construct(){
        $this->initHooks();
    }    
    /**
     * Provide unic and shared instance
     *
     * @return App
     */
    public static function getInstance(){
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }    
    /**
     * load all hooks
     *
     * @return void
     */
    private function initHooks(){
        add_filter('the_content', [$this, 'customEndContent'], 10);
    }    
    /**
     * Intercept the content and add custom string on end.
     *
     * @param  string $content
     * @return string
     */
    public function customEndContent(string $content){
        if ($this->canExecute()){
            return $this->render($content);
        }
        return $content;
    }    
    /**
     * render custom template
     *
     * @param  mixed $content
     * @return string
     */
    private function render(string $content){
        $siteName = $this->getSitaData('name');
        $url = $this->getSitaData('url', true);
        $i18n = __('<p><b>This content is created by: %s (%s)<b></p>','client-customization');
        return $content.sprintf($i18n, $siteName, $url);

    }    
    /**
     * Capture website information based on key  and prevent xss
     *
     * @param  mixed $key
     * @return string
     */
    private function getSitaData(string $key, $isUrl = false){
        if ($isUrl){
            return esc_url(get_bloginfo($key));
        }
        return esc_html(get_bloginfo($key));
    }    
    /**
     * Validates whether the page is a blog post
     *
     * @return bool
     */
    private function canExecute(){
        return get_post()->post_type === 'post';
    }
}