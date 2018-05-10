<?php
    /*
    * File path constants
    */
    define('ROOT_PATH', dirname(__FILE__, 2).DIRECTORY_SEPARATOR);
    define('INC_PATH', ROOT_PATH.'inc'.DIRECTORY_SEPARATOR);
    define('MODELS_PATH', INC_PATH.'models'.DIRECTORY_SEPARATOR);
    define('VIEWS_PATH', INC_PATH.'views'.DIRECTORY_SEPARATOR);
    
    //php templates paths
    define('TEMPLATES_PATH', INC_PATH.'templates'.DIRECTORY_SEPARATOR);
    define('TEMPLATES_PARTIALS_PATH', TEMPLATES_PATH.'partials'.DIRECTORY_SEPARATOR);
    define('TEMPLATES_HOME_PATH', TEMPLATES_PATH.'home'.DIRECTORY_SEPARATOR);
    define('TEMPLATES_FAQ_PATH', TEMPLATES_PATH.'faq'.DIRECTORY_SEPARATOR);
    
    //js source file paths
    define('JS_SRC_PATH', ROOT_PATH.'js_src'.DIRECTORY_SEPARATOR);

    /**
     * URLs
     * */
    define('BASE_URL', '/');
    define('CSS_URL_BASE', BASE_URL.'styles/');
    define('JS_URL_BASE', BASE_URL.'js/');
    define('IMAGES_URL', BASE_URL.'images/');

    define('CSS_APP_URL', CSS_URL_BASE.'style.css');

    //pages
    define('HOME_PAGE_URL', BASE_URL);
    define('FAQ_PAGE_URL', BASE_URL.'faq');
    define('APPENDIX_PAGE_URL', BASE_URL.'appendix');
    define('DITHERMARK_APP_URL', '//app.dithermark.com');


    