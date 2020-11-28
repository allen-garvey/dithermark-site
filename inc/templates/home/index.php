<?php
    if(!defined('IS_FASTCGI') || !IS_FASTCGI){
        require_once('./inc/config.php');
    }
    require_once(MODELS_PATH.'home.php');
    require_once(VIEWS_PATH.'page-view.php');
    PageView::layout(TEMPLATES_HOME_PATH.'home.php', ['images' => $images]);