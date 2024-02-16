<?php
     //error_reporting(0);
     $PGSA = @$_GET['PG_SA'];
     if($PGSA ==''){ 
           #echo "<img src='https://rspwc.net/E-PWC/CDN/edis.jpg' class=img-fluid>";
      ?>
           <div class="card border-light mb-3 mx-2" style="max-width: 20rem;">
                  <div class="card-header">Informasi Akun</div>
                  <div class="card-body">
                 <?PHP 
                        echo $hr_vusr01_sww['user_nama_01'];
                        echo"<br>";
                        echo "AT ".$DATE_HTML5;
                        echo"<br>";
                        echo "TOKEN : ".$IDMAIN;
                 ?>
                  </div>
            </div>
     <?PHP }else{
      switch(@$SQL_SL($PGSA)){
            #MASTER DATA
                  case"$PGSA":
                        include"EDIS/$PGSA.php";  #DIISI DENGAN NAMA FOLDER FILE
                  break;

          }

     }
     
  ?>