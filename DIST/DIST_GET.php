    <title>DiAm</title>
<?php
        /* Himpunan INCLUDER */
		    include"../DIST/CFG/CFG_01.php";
            include"../DIST/CFG/CFG_02.php";
            
    
        /* - here - */
        #DATA GET VIEW
        $IDUSR01 = @$SQL_ESC($CONN01,$_GET['IDUSR01']);
        $IDDISP01 = @$SQL_ESC($CONN01,$_GET['IDDISP01']);
        $IDFLAG01 = @$SQL_ESC($CONN01,$_GET['IDFLAG01']);
        $IDINVEN01 = @$SQL_ESC($CONN01,$_GET['IDINVEN01']);

        #GET VIEW DELETE
        $IDDELDISP01 = @$SQL_ESC($CONN01,$_GET['IDDELDISP01']);

/*-----------------------------------------------------*/

        #DATA USER
        $hr_vusr01_sw = @$CL_Q($CONN01,"$CL_SL srv_user_01 WHERE user_nama_01='$_SESSION[namauser]'");
         $hr_vusr01_sww = $CL_FAS($hr_vusr01_sw);

         ###DATA SHEET VIEW#####
         #USER
         $pl_vw_vusr01_sw = $CL_Q($CONN01,"$CL_SL srv_user_01 WHERE idmain_user_01='$IDUSR01'");
         $pl_vw_vusr01_sww = $CL_FAS($pl_vw_vusr01_sw);
         #echo $pl_vw_vusr01_sww['user_hak_01'];
         /*-----------------------------------------------------*/
         #DISPOSISI 01
         $pl_vw_vdisp01_sw = $CL_Q($CONN01,"$CL_SL srv_disp_01 WHERE idmain_disp_01='$IDDISP01'");
         $pl_vw_vdisp01_sww = $CL_FAS($pl_vw_vdisp01_sw);
         
         #DISPOSISI 02
         $pl_vw_vdisp02_sw = $CL_Q($CONN01,"$CL_SL srv_disp_02 WHERE idmain_disp_01='$IDDISP01'");
         $pl_vw_vdisp02_sww = $CL_FAS($pl_vw_vdisp02_sw);

           #DISPOSISI 03
           $pl_vw_vdisp03_sw = $CL_Q($CONN01,"$CL_SL srv_disp_03 WHERE idmain_disp_01='$IDDISP01'");
           $pl_vw_vdisp03_sww = $CL_FAS($pl_vw_vdisp03_sw);
/*-----------------------------------------------------*/
        #DATA FLAG
        $pl_vw_vflag01_sw = $CL_Q($CONN01,"$CL_SL srv_flag_01 WHERE idmain_flag_01='$IDFLAG01'");
        $pl_vw_vflag01_sww = $CL_FAS($pl_vw_vflag01_sw);
/*-----------------------------------------------------*/
        #DATA INVEN
        $pl_vw_vinven01_sw = $CL_Q($CONN01,"$CL_SL srv_inven_01 WHERE idmain_inven_01='$IDINVEN01'");
        $pl_vw_vinven01_sww = $CL_FAS($pl_vw_vinven01_sw);

/*-----------------------------------------------------*/     

        #PENOMORAN SURAT DISPOSISI
        $pl_nomor_vdisp01_sw = $CL_Q($CONN01,"$SL idmain_disp_01 FROM srv_disp_01");
        $pl_nomor_vdisp01_sww = $CL_FAS($pl_nomor_vdisp01_sw);
        $pl_nr_nomor_vdisp01_sww = $CL_NR($pl_nomor_vdisp01_sw);
        $pl_nr_nomor_hit_vdisp01_sww =  $pl_nr_nomor_vdisp01_sww + 1;
        $pl_nr_nomor_set_vdisp01_sww = sprintf("%04s",$pl_nr_nomor_hit_vdisp01_sww);
            #DECALRE
            if(@$_GET['UPDISP01']){
                $KODE_NOMOR = "$pl_vw_vdisp01_sww[disp_kode_01]";
            }else{
                $KODE_NOMOR = "$pl_nr_nomor_set_vdisp01_sww/";
            }
        
        #PENOMORAN INVETARIS RENT
        $pl_nomor_vinven01_sw = $CL_Q($CONN01,"$SL idmain_inven_01 FROM srv_inven_01");
        $pl_nomor_vinven01_sww = $CL_FAS($pl_nomor_vinven01_sw);
        $pl_nr_nomor_vinven01_sww = $CL_NR($pl_nomor_vinven01_sw);
        $pl_nr_nomor_hit_vinven01_sww =  $pl_nr_nomor_vinven01_sww + 1;
        $pl_nr_nomor_set_vinven01_sww = sprintf("%04s",$pl_nr_nomor_hit_vinven01_sww);
            #DECALRE
            #DECALRE
            if(@$_GET['UPINVEN01']){
                $KODE_NOMOR02 = "$pl_vw_vinven01_sww[inven_kode_01]";
            }else{
                $KODE_NOMOR02 = "$DATE_ymd.$pl_nr_nomor_set_vinven01_sww";
            }
?>  