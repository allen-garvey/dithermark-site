<?php

class PageView{


    public static function layout(string $pageContentPath){
        require(TEMPLATES_PARTIALS_PATH.'head.php');
        require($pageContentPath);
        require(TEMPLATES_PARTIALS_PATH.'foot.php');
    }
}