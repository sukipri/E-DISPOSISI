<?PHP //error_reporting(0); 
      include"../../CONFIG/MYSQL/MY_CONNECT_PRD.php";
    $idprov = @$_GET['idprov']; ?>
<?php 
/*
##-GET DATA--##
    #echo $idcity;
    //$APIkey="17dd3619561411ce1bf65fe7a91ca7fba9fa9f2e3f8b7419eddda096d9024fcc";
      function curl02($urlsf02){
      $chsf02 = curl_init(); 
      curl_setopt($chsf02,CURLOPT_HTTPHEADER,array(
      "Content-Type: Application/JSON",          
      "Accept: Application/JSON"
  ));
      curl_setopt($chsf02, CURLOPT_URL, $urlsf02); 
      curl_setopt($chsf02, CURLOPT_RETURNTRANSFER, 1); 
      curl_setopt($chsf02, CURLOPT_CUSTOMREQUEST,"GET");
      curl_setopt($chsf02, CURLOPT_TIMEOUT, 60);  
      curl_setopt($chsf02, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($chsf02, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($chsf02, CURLPROTO_HTTPS , true);
      curl_setopt($chsf02, CURLINFO_HEADER_OUT, true);
      $outputsf02 = curl_exec($chsf02); 
      curl_close($chsf02);      
      return $outputsf02;
  }
  
  $send02 = curl02("https://api.binderbyte.com/wilayah/kabupaten?api_key=aa4e33a53ff7c8b472186d8ac298461445e98843b85edc842ead21d2133ac237&id_cityinsi=$idcity");
  
  // mengubah JSON menjadi array
  @$data_kab = json_decode($send02, TRUE);

      //print_r($data);      
      */
?> 
<div class="input-group input-group-sm mb-3"  style="max-width:25rem">
  <span class="input-group-text" id="basic-addon1">Kabupaten</span>
 <select name="pl_kota_01" onChange="showUserr(this.value)" class="form-control form-control-sm">
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
    $pl_vcity01_sw = mysqli_query($CONN01,"select * from tcity WHERE prov_id='$idprov' order by city_name asc"); 
        while($pl_vcity01_sww = mysqli_fetch_assoc($pl_vcity01_sw)){
          echo"<option value=$pl_vcity01_sww[city_id]>$pl_vcity01_sww[city_id] $pl_vcity01_sww[city_name]</option>";
        }
  ?>
  </select>

</div>
