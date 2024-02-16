<?php
         @session_start();
         $IDTT01=@$_GET['IDTT01'];
         $IDAKSES01 = @$_GET['IDAKSES01'];
			//..INCLUDER//
            include"../../CONFIG/MYSQL/MY_CONNECT_PRD.php";
            //include"../../DIST/CFG/CFG_01.php";
            include"../../DIST/CODE/CODE_02_DDL.php";
         
			//.....///
		//..Sesiion open../
		 if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
 		    	//include'PG_H_LOCATION.php';
       }else{
	//..Access Method.//
 	 $vus01_sw = $CL_Q($CONN01,"$CL_SL sh_user_01 where user_nama_01='$_SESSION[namauser]' AND user_hak_01='$IDAKSES01'");
        $vus01_sww = $CL_FAS($vus01_sw);
        
			if($vus01_sww['user_hak_01']=="1"){ 
?>
        <!-- Direct to HOME_APP.php-->
        <meta http-equiv="refresh" content="0; url=<?php echo"../../ERM/ERM_HOME_01.php"; ?>">
            <!-- . . . ..  -->

            <?php   }elseif($vus01_sww['user_hak_01']=="00"){ echo"User Not valid";   ?>
                       
            
            <!-- Close Session -->
            <?php

                        }else{
                            //include'PG_H_LOCATION.php';
                        } }
                        ob_flush();

                    ?>