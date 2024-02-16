<?php 
include"../../CONFIG/MYSQL/MY_CONNECT_PRD.php";
$idkab = @$_GET['idkab'];
/*
    ##-GET DATA--##
    
    #echo $idprov;
    //$APIkey="17dd3619561411ce1bf65fe7a91ca7fba9fa9f2e3f8b7419eddda096d9024fcc";
      function curl03($urlsf03){
      $chsf03 = curl_init(); 
      curl_setopt($chsf03,CURLOPT_HTTPHEADER,array(
      "Content-Type: Application/JSON",          
      "Accept: Application/JSON"
  ));
      curl_setopt($chsf03, CURLOPT_URL, $urlsf03); 
      curl_setopt($chsf03, CURLOPT_RETURNTRANSFER, 1); 
      curl_setopt($chsf03, CURLOPT_CUSTOMREQUEST,"GET");
      curl_setopt($chsf03, CURLOPT_TIMEOUT, 60);  
      curl_setopt($chsf03, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($chsf03, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($chsf03, CURLPROTO_HTTPS , true);
      curl_setopt($chsf03, CURLINFO_HEADER_OUT, true);
      $outputsf03 = curl_exec($chsf03); 
      curl_close($chsf03);      
      return $outputsf03;
  }
  
  $send03 = curl03("https://api.binderbyte.com/wilayah/kecamatan?api_key=aa4e33a53ff7c8b472186d8ac298461445e98843b85edc842ead21d2133ac237&id_kabupaten=$idkab");
  
  // mengubah JSON menjadi array
  @$data_kec = json_decode($send03, TRUE);

      //print_r($data);      
      */
?> 
<div class="input-group input-group-sm mb-3"  style="max-width:25rem">
  <span class="input-group-text" id="basic-addon1">Kecamatan</span>
 <select name="pl_kec_01"  class="form-control form-control-sm">
 <?PHP 
  /*
    echo"<option value=>-</option>";
    foreach($data_kab['value'] as $baris_kab){
      if($sh_vcrpsn01_sww['psn_kab_01']==$baris_row['id']){
        echo"<option value=$baris_kab[id] selected>$baris_kab[name]";
      }else{
      echo"<option value=$baris_kab[id]>$baris_kab[name]";
    }}
    */
    $pl_vkec01_sw = mysqli_query($CONN01,"select * from tdist WHERE city_id='$idkab' order by dis_name asc"); 
        while($pl_vkec01_sww = mysqli_fetch_assoc($pl_vkec01_sw)){
          echo"<option value=$pl_vkec01_sww[dis_id]>$pl_vkec01_sww[dis_name]</option>";
        }
  ?>
  </select>

</div>
