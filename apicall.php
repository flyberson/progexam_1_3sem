<?php

try {
    $ch = curl_init('https://localhost/PhpstormProjects/api.php/Orders');

    if (FALSE === $ch)
        throw new Exception('failed to initialize');


    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


    $content = curl_exec($ch);

    if (FALSE === $content)
        throw new Exception(curl_error($ch), curl_errno($ch));

    // ...process $content now
} catch(Exception $e) {

    trigger_error(sprintf(
        'Curl failed with error #%d: %s',
        $e->getCode(), $e->getMessage()),
        E_USER_ERROR);

}
echo $content;
/*
//function curlmicro(){
    $ch = curl_init('https://localhost/PhpstormProjects/api.php/Orders');
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    $resultj = json_decode($result);


    $test = $resultj->ORD_ID;
    echo $test;
   // $imgurl= "https://cdn.browshot.com/static/images/not-found.png";
// object json $object->key->key->value;
  //  if(isset($resultj->data->logo->url)){
   //     $imgurl = $resultj->data->logo->url;}
   // return $imgurl;




//}
*/