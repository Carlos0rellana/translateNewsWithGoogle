<?php
require_once ROOT_DIR.'/vendor/autoload.php';
use Google\Cloud\Translate\V2\TranslateClient;
    
    function translateGoogle($text,$in='es',$out='pt'){    
        $config = [
            'keyFilePath' => ROOT_DIR.'/config/translatearticles.json',
            'projectId' => 'translatearticles',
        ];
        $translate = new TranslateClient($config);
        $result = $translate->translate($text, ['source'=>$in,'target' => $out]);
        return $result['text'];
    }
?>