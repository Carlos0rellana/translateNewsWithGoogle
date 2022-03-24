<?php
    define('ROOT_DIR', dirname(__FILE__,2));
    require_once ROOT_DIR.'/controller/getTranslate.php';
    
    $site='mwnchile';
    $articleId='OUPYXWBOGVFATAW5SXIDMQIVGE';

    print_r(translateOneArticle($site,$articleId));
    
?>