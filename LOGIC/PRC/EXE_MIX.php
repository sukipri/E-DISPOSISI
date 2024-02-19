<?php
    /*-------------------------------------------------------*/

    /*Himpunan Eksekusi Porses Mixing execution Quering*/

    /*-----------------------------------------------------*/
?>
<?php
	#PL_MD_01_IN_DISJNS 
	#VARIABLE
	$flag_nama_01 = @$SQL_ESC($CONN01,$_POST['flag_nama_01']);
	#PROCCESSING INSERT JENIS DISP
	if(isset($_POST['simpan_dispjns_01'])){
		$save_jns_flag_01 = $CL_Q($CONN01,"$IN srv_flag_01(idmain_flag_01,flag_kode_01,flag_nama_01,flag_jenis_01)VALUES('$IDMAIN','$IDKODE','$flag_nama_01','DISP')");
		header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_DISJNS");
	}
	#PROCCESSING UPDATE JENIS DISP
	if(isset($_POST['update_dispjns_01'])){
		$up_jns_flag_01 = $CL_Q($CONN01,"$UP srv_flag_01 SET flag_nama_01='$flag_nama_01' WHERE idmain_flag_01='$IDFLAG01'");
		header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_DISJNS");
	}
	#PROCCESSING INSERT JENIS INVEN
	if(isset($_POST['simpan_invenjns_01'])){
		$save_jns_flag_01 = $CL_Q($CONN01,"$IN srv_flag_01(idmain_flag_01,flag_kode_01,flag_nama_01,flag_jenis_01)VALUES('$IDMAIN','$IDKODE','$flag_nama_01','INVEN')");
		header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_INVENJNS");
	}
/*-----------------------------------------------------*/
	#PL_MD_01_IN_USER
	#VARIABLE
		$user_nama_01 = @$SQL_ESC($CONN01,$_POST['user_nama_01']);
		$user_ketnama_01 = @$SQL_ESC($CONN01,$_POST['user_ketnama_01']);
		$user_pass_01 = @md5($_POST['user_pass_01']);
		$user_passtext_01 = @$SQL_ESC($CONN01,$_POST['user_pass_01']);
		$user_hak_01 = @$SQL_ESC($CONN01,$_POST['user_hak_01']);
		#PROCCESSING INSERT
		if(isset($_POST['simpan_user_01'])){
			$save_user_01 = @$CL_Q($CONN01,"$IN srv_user_01(idmain_user_01,user_kode_01,user_nama_01,user_pass_01,user_hak_01,user_status_01,user_relasi_01,user_ketnama_01,user_passtext_01)VALUES('$IDMAIN','$IDKODE','$user_nama_01','$user_pass_01','$user_hak_01','2','0','$user_ketnama_01','$user_passtext_01')");
			if($save_user_01){
				header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_USER");
			}else{
				include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
			}
		}
		#PROCCESSING UPDATE
		if(isset($_POST['update_user_01'])){
			$save_user_01 = @$CL_Q($CONN01,"$UP srv_user_01 SET user_nama_01='$user_nama_01',user_pass_01='$user_pass_01',user_hak_01='$user_hak_01',user_ketnama_01='$user_ketnama_01',user_passtext_01='$user_passtext_01' WHERE idmain_user_01='$IDUSR01'");
			if($save_user_01){
				header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_USER");
			}else{
				include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
			}
		}
/*-----------------------------------------------------*/
		#PL_MD_01_IN_DIS
		#VARIABLE
		$disp_kode_01 = @$SQL_ESC($CONN01,$_POST['disp_kode_01']);
		$disp_nama_01 = @$SQL_ESC($CONN01,$_POST['disp_nama_01']);
		$idmain_flag_01 = @$SQL_ESC($CONN01,$_POST['idmain_flag_01']);
		$disp_tglmasuk_01 = @$SQL_ESC($CONN01,$_POST['disp_tglmasuk_01']);
		#PROCCESSING INSERT
		if(isset($_POST['simpan_disp_01'])){
		$save_disp_01 = $CL_Q($CONN01,"$IN srv_disp_01(idmain_disp_01,idmain_flag_01,disp_kode_01,disp_nama_01,disp_tglinput_01,disp_tglmasuk_01,disp_status_01)VALUES('$IDMAIN','$idmain_flag_01','$disp_kode_01','$disp_nama_01','$DATE_HTML5_SQL','$disp_tglmasuk_01','1')");
		if($save_disp_01){
			header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN02_DIS");
		}else{
			include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
		}
		}
		#PROCCESSING UPDATE
		if(isset($_POST['update_disp_01'])){
			$save_disp_01 = $CL_Q($CONN01,"$UP srv_disp_01 SET idmain_flag_01='$idmain_flag_01',disp_kode_01='$disp_kode_01',disp_nama_01='$disp_nama_01',disp_tglmasuk_01='$disp_tglmasuk_01' WHERE idmain_disp_01='$IDDISP01'");
			if($save_disp_01){
				header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN02_DIS");
			}else{
				include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
			}
			}
/*-----------------------------------------------------*/
		#PL_MD_01_IN04_DIS
		#VARIABLE
		$disp02_idmain_user_01 = @$SQL_ESC($CONN01,$_POST['disp02_idmain_user_01']);
		$disp02_ket_01 = @$SQL_ESC($CONN01,$_POST['disp02_ket_01']);
		#PROCCESSING
		if(isset($_POST['simpan_disp_04'])){
			$save_disp_04 = $CL_Q($CONN01,"$IN srv_disp_02(idmain_disp_02,idmain_disp_01,idmain_user_01,disp02_tglinput_01,disp02_status_01,disp02_ket_01,disp02_uploader_01)VALUES('$IDMAIN','$IDDISP01','$disp02_idmain_user_01','$DATE_HTML5_SQL','2','$disp02_ket_01','$hr_vusr01_sww[idmain_user_01]')"); #DISP 02
			$up_disp_04 = $CL_Q($CONN01,"$UP srv_disp_01 SET disp_status_01='2' WHERE idmain_disp_01='$IDDISP01'"); #DISP 01
			if($save_disp_04){
				header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN04_DIS&IDDISP01=$IDDISP01");
			}else{
				include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
			}
		}

/*-----------------------------------------------------*/
		#PL_APP_01_IN_DISAPP
		#VARIABLE
		$disp03_ket_01 = @$SQL_ESC($CONN01,$_POST['disp03_ket_01']);
		#PROCCESSING DITERIMA
		if(isset($_POST['simpan_disapp_01'])){
		 $save_disapp_01 = $CL_Q($CONN01,"$IN srv_disp_03(idmain_disp_03,idmain_disp_01,idmain_user_01,disp03_status_01,disp03_ket_01)VALUES('$IDMAIN','$IDDISP01','$hr_vusr01_sww[idmain_user_01]','4','$disp03_ket_01')"); #DISP 03
		 #$up_disp_01 = $CL_Q($CONN01,"$UP srv_disp_01 SET disp_status_01='4' WHERE idmain_disp_01='$IDDISP01'"); #DISP 01
		 $up_disp_02 = $CL_Q($CONN01,"$UP srv_disp_02 SET disp02_status_01='4' WHERE idmain_disp_01='$IDDISP01' AND idmain_user_01='$hr_vusr01_sww[idmain_user_01]'"); #DISP 02
		 header("LOCATION:?PG_SA=PL_APP_01&PG_SA_SUB=PL_APP_01_VIEW_DISAPP");

		}
		#PROCCESSING ditolak
		if(isset($_POST['simpan_undisapp_01'])){
			$save_disapp_01 = $CL_Q($CONN01,"$IN srv_disp_03(idmain_disp_03,idmain_disp_01,idmain_user_01,disp03_status_01,disp03_ket_01)VALUES('$IDMAIN','$IDDISP01','$hr_vusr01_sww[idmain_user_01]','3','$disp03_ket_01')"); #DISP 03
			#$up_disp_01 = $CL_Q($CONN01,"$UP srv_disp_01 SET disp_status_01='3' WHERE idmain_disp_01='$IDDISP01'"); #DISP 01
			$up_disp_02 = $CL_Q($CONN01,"$UP srv_disp_02 SET disp02_status_01='3' WHERE idmain_disp_01='$IDDISP01' AND idmain_user_01='$hr_vusr01_sww[idmain_user_01]'"); #DISP 02
			header("LOCATION:?PG_SA=PL_APP_01&PG_SA_SUB=PL_APP_01_VIEW_DISAPP");
   
		   }

		  
/*-----------------------------------------------------*/
		   #PL_MD_01_VIEW_DIS02
		   #PROCCESSING
		   if(isset($_GET['UPTTPDISP01'])){ #UPDATE 
				$up_sts_disp_01 = @$CL_Q($CONN01,"$UP srv_disp_01 SET disp_status_01='5' WHERE idmain_disp_01='$IDDISP01'"); #DISP 01
				$up_sts_disp_02 = @$CL_Q($CONN01,"$UP srv_disp_02 SET disp02_status_01='5' WHERE idmain_disp_01='$IDDISP01'"); #DISP 02
				header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_DIS02&IDDISP01=$IDDISP01");

		   }

/*-----------------------------------------------------*/
			#VARIABLE
			$inven_kode_01 = @$SQL_ESC($CONN01,$_POST['inven_kode_01']);
			$inven_ket_01 = @$SQL_ESC($CONN01,$_POST['inven_ket_01']);
			$idmain_inven_flag_01 = @$SQL_ESC($CONN01,$_POST['idmain_inven_flag_01']);
			$inven_jml_01 = @$SQL_ESC($CONN01,$_POST['inven_jml_01']);
			#PROCCESSING INSERT
		   	if(isset($_POST['simpan_inven_01'])){
				$save_inven_01 = $CL_Q($CONN01,"$IN srv_inven_01(idmain_inven_01,idmain_flag_01,inven_kode_01,inven_ket_01,inven_status_01,inven_jml_01)VALUES('$IDMAIN','$idmain_inven_flag_01','$inven_kode_01','$inven_ket_01','2','$inven_jml_01')");
					if($save_inven_01){
						header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_INVEN");
					}else{ 
						include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
					}
		   }
		   #PROCCESSING UPDATE
		   if(isset($_POST['update_inven_01'])){
			$up_inven_01 = $CL_Q($CONN01,"$UP srv_inven_01 SET idmain_flag_01='$idmain_inven_flag_01',inven_kode_01='$inven_kode_01',inven_ket_01='$inven_ket_01',inven_jml_01='$inven_jml_01' WHERE idmain_inven_01='$IDINVEN01'");
				if($up_inven_01){
					header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_INVEN");
				}else{ 
					include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
				}
	   }
/*-----------------------------------------------------*/
	   		#VARIABLE 
			$ruang_kode_01 = @$SQL_ESC($CONN01,$_POST['ruang_kode_01']);
			$ruang_nama_01 = @$SQL_ESC($CONN01,$_POST['ruang_nama_01']);
			#PROCCESSING INSERT
			if(isset($_POST['simpan_ruang_01'])){
				$save_ruang_01 = @$CL_Q($CONN01,"$IN srv_ruang_01(idmain_ruang_01,ruang_kode_01,ruang_nama_01,ruang_status_01)VALUES('$IDMAIN','$ruang_kode_01','$ruang_nama_01','2')");
				if($save_ruang_01){
					include"../LAYOUT/NOTIF/NF_SAVE_SUCCESS.php";
				}else{ 
					include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
				}
			}
			#PROCCESSING UPDATE
			if(isset($_POST['update_ruang_01'])){
				$save_ruang_01 = @$CL_Q($CONN01,"$UP srv_ruang_01 SET ruang_kode_01='$ruang_kode_01',ruang_nama_01='$ruang_nama_01' WHERE idmain_ruang_01='$IDRUANG01'");
				if($save_ruang_01){
					header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_RUANG");
				}else{ 
					include"../LAYOUT/NOTIF/NF_SAVE_FAILED.php";
				}
			}
		   
	/*--------------------CLOSSSEEEESSS---------------------------------*/

	?>