<?php
    require_once ROOT_DIR.'/models/getTranslateFromGoogle.php';
    require_once ROOT_DIR.'/controller/getArticle.php';

    function getTranslate($text,$in='es',$out='pt'){
        return translateGoogle($text);
    }

    function translateOneArticle($site,$articleId,$in='es',$out='pt'){
        $article = json_decode(getArticle($site,$articleId),true);
        foreach ($article['content_elements'] as $key => $value) {
            if($value['type']==='text' || $value['type']==='raw_html'){
                print_r($key);
                print_r(getTranslate($value['content'],$in,$out));
            }
            print_r('<hr/>');
        }
        return $article;
    }

?>