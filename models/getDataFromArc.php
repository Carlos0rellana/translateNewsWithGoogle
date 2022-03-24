<?php
    function getOneArticle($site,$articleId){
        require_once ROOT_DIR.'/config/dataConection.php';
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $apiUrl.'/content/v4/stories/?website='.$site.'&_id='.$articleId,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$pass),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
?>