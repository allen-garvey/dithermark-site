<?php

class PageView{


    public static function layout(string $pageContentPath){
        require(TEMPLATES_PARTIALS_PATH.'head.php');
        require($pageContentPath);
        require(TEMPLATES_PARTIALS_PATH.'foot.php');
    }

    //replaces single quotes with xml/html entities for smart quotes
    public static function smartenSingleQuotes(string $s): string{
        return str_replace('\'', '&#8217;', preg_replace('/ \'/', ' &#8216;', $s));
    }
}