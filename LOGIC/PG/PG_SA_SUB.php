<?php
    //error_reporting(0);
    $PGSASUB = @$_GET['PG_SA_SUB'];
    if($PGSASUB ==''){ 
        #echo "<img src='https://rspwc.net/E-PWC/CDN/edis.jpg' class=img-fluid>";
        echo "";
  }else{
    switch(@$SQL_SL($_GET['PG_SA_SUB'])){
        
            #MASTER DATA
            case"$PGSASUB":
                include"EDIS/$PGSASUB.php";
            break;
           }
        }
?>