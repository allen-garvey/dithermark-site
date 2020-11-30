<?php
    //find out if we are running from makefile, or directly through fastcgi
    if(!empty($argv)){
        define('IS_FASTCGI', false);
    }
    else{
        define('IS_FASTCGI', true);
    }

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
    define('TEMPLATES_RESOURCES_PATH', TEMPLATES_PATH.'resources'.DIRECTORY_SEPARATOR);

    /**
     * URLs
     * */
    define('BASE_URL', '/');
    define('CSS_URL_BASE', BASE_URL.'assets/');
    define('JS_URL_BASE', BASE_URL.'assets/');
    define('IMAGES_URL', BASE_URL.'images/');

    define('CSS_APP_URL', CSS_URL_BASE.'style.css');
    define('DITHERMARK_GITHUB_URL', 'https://github.com/allen-garvey/dithermark/');

    //pages
    define('HOME_PAGE_URL', BASE_URL);
    define('FAQ_PAGE_URL', BASE_URL.'faq');
    define('RESOURCES_PAGE_URL', BASE_URL.'resources');
    define('DITHERMARK_APP_URL', '//app.dithermark.com');


    