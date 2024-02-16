<?php 
/*
##-GET DATA--##

  //$APIkey="17dd3619561411ce1bf65fe7a91ca7fba9fa9f2e3f8b7419eddda096d9024fcc";
      function curl01($urlsf){
      $chsf01 = curl_init(); 
      curl_setopt($chsf01,CURLOPT_HTTPHEADER,array(
      "Content-Type: Application/JSON",          
      "Accept: Application/JSON"
  ));

      curl_setopt($chsf01, CURLOPT_URL, $urlsf); 
      curl_setopt($chsf01, CURLOPT_RETURNTRANSFER, 1); 
      curl_setopt($chsf01, CURLOPT_CUSTOMREQUEST,"GET");
      curl_setopt($chsf01, CURLOPT_TIMEOUT, 60);  
      curl_setopt($chsf01, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($chsf01, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($chsf01, CURLPROTO_HTTPS , true);
      curl_setopt($chsf01, CURLINFO_HEADER_OUT, true);
      $outputsf = curl_exec($chsf01); 
      curl_close($chsf01);      
      return $outputsf;
  }
  
  //$send01 = curl01("https://dev.farizdotid.com/api/daerahindonesia/provinsi");
  $send01 = curl01("https://api.binderbyte.com/wilayah/provinsi?api_key=aa4e33a53ff7c8b472186d8ac298461445e98843b85edc842ead21d2133ac237");
  
  // mengubah JSON menjadi array
  @$data_prov = json_decode($send01, TRUE);
  
      //print_r($data);
  */    
?> 