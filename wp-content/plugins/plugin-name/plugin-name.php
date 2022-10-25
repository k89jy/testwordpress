 <?php
    /**
     * @package plugin-name
     */


    /**
     * Plugin Name: test plugin
     * Author: me
     * Plugin URI: http://plugin-name.com/plugin
     * Description: This is test for my work
     */

    // 보안 조사!!!
    // 파일을 다 보여주지 않는다.!!!
    // ABSPATH constant absolute path 
    // if (!defined('ABSPATH')) {
    //     die;
    // }

    //defined('ABSPATH') or die('no access');

    if (!function_exists('add_action')) {
        echo 'no access';
        exit;
    }

    class PluginName
    {
        function __construct()
        {
            add_action('init', array($this, 'custom_post_type'));
        }
        //methods
        public function register()
        {
            add_action('admin_enqueue_scrips', array($this, 'enqueue'));
        }
        private function activate()
        {
            // echo 'hello activate';
            $this->custom_post_type();
            flush_rewrite_rules();
        }
        private function deactivate()
        {

            flush_rewrite_rules();
            echo 'hello activate';
        }
        function method1()
        {
        }
        function custom_post_type()
        {
            register_post_type('book', ['public' => true, 'label' => 'Books']);
        }
        function enqueue()
        {
            //enquere all out scipts
            wp_enqueue_style('mypluginStyle', plugins_url('/assets/mysql.css', __FILE__), array(''), false, 'all');
        }
    }
    if (class_exists('PluginName')) {
        $test = new PluginName();
        $test->register();
    }

    //activation
    register_activation_hook(__FILE__, array($test, 'activate'));

    //add_action(('init','function_name'));

    //deactivation
    register_deactivation_hook(__FILE__, array($test, 'deactivate'));
    //uninstall