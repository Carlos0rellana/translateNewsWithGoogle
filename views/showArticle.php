<?php
    define('ROOT_DIR', dirname(__FILE__,2));
    require_once ROOT_DIR.'/controller/getArticle.php';
    
    $site='mwnchile';
    $articleId='AFDOV44HV5H3PMKA3SE7NHDKYI';

    echo getArticle($site,$articleId);
    
?>