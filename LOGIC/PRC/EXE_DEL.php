<?php
/*-------------------------------------------------------*/
    /* Himpunan Eksekusi Porses DELETING data               */
    /*-----------------------------------------------------*/

    #KEU_PBEBAN_01_IN.php
    if(isset($_GET['DELPBEBAN01'])){

            #PROCCESSING
            $CL_Q($CONN01,"$DL FROM akeu_pbeban_01 WHERE idmain_pbeban_01='$IDDELPBEBAN01'");
    ?>
        <meta http-equiv="refresh" content="0; url=<?PHP echo"?PG_SA=KEU_PBEBAN_01&PG_SA_SUB=KEU_PBEBAN_01_IN"; ?>">
    <?PHP } ?>

    <?PHP 
        if(isset($_GET['DELPSN01'])){
            $sh_del_psn_01 = $CL_Q($CONN01,"$DL FROM sh_psn_01 WHERE idmain_psn_01='$IDDELPSN01'");
        
       if($sh_del_psn_01){
			header("LOCATION:?PG_SA=ERM_PSN_01&PG_SA_SUB=ERM_PSN_01_IN");
						}else{
							include_once"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
						}
                    }

        ?>


