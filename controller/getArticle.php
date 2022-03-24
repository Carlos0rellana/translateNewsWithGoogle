<?php
    require_once ROOT_DIR.'/models/getDataFromArc.php';
    function getArticle($site,$articleId){
        return getOneArticle($site,$articleId);
    }
?>