<?PHP
        echo "<b>".$pl_vw_vdisp01_sww['disp_kode_01']." | ".$pl_vw_vdisp01_sww['disp_nama_01']."</b>";
        echo"<br>";
        echo "<i class='far fa-calendar-alt'></i> ".FS_DATE($pl_vw_vdisp01_sww['disp_tglmasuk_01']);

        #DATA FILE
        $pl_ls_vdfile01_sw = $CL_Q($CONN01,"$CL_SL srv_dfile_01 WHERE idmain_relasi_01='$IDDISP01' ");
        echo"<hr>";
        while($pl_ls_vdfile01_sww = $CL_FAS($pl_ls_vdfile01_sw)){
            
               echo"<a href='$pl_ls_vdfile01_sww[dfile_isi_01]' class='btn btn-info btn-sm'><i class='far fa-file'></i> $pl_ls_vdfile01_sww[dfile_ket_01]</a> &nbsp";
           
        }
        echo"<br>";echo"<br>";

        #DATA USER TERKAIT
        $pl_ls_vdisp02_sw = $CL_Q($CONN01,"$CL_SL srv_disp_02 WHERE idmain_disp_01='$IDDISP01'");
        echo"<b>#Akun Terkait</b> > ";
        while($pl_ls_vdisp02_sww = $CL_FAS($pl_ls_vdisp02_sw)){
          #DATA USER TERKAIT
          $pl_ls_vusr01_sw = $CL_Q($CONN01,"$SL idmain_user_01,user_nama_01,user_ketnama_01 FROM srv_user_01 WHERE idmain_user_01='$pl_ls_vdisp02_sww[idmain_user_01]'");
          $pl_ls_vusr01_sww = $CL_FAS($pl_ls_vusr01_sw);
            echo "  $pl_ls_vusr01_sww[user_ketnama_01] | ";
        }
        echo"<br>";echo"<br>";

        $pl_ls_vdisp03_sw = $CL_Q($CONN01,"$CL_SL srv_disp_03 WHERE idmain_disp_01='$IDDISP01'");
          while($pl_ls_vdisp03_sww = $CL_FAS($pl_ls_vdisp03_sw)){
            #DATA USER
            $pl_ls02_vusr01_sw = $CL_Q($CONN01,"$SL idmain_user_01,user_nama_01,user_ketnama_01 FROM srv_user_01 WHERE idmain_user_01='$pl_ls_vdisp03_sww[idmain_user_01]'");
            $pl_ls02_vusr01_sww = $CL_FAS($pl_ls02_vusr01_sw);
            
            if($pl_ls_vdisp03_sww['disp03_status_01']=="4"){
              echo" <span class='badge bg-primary'> Diterima </span>";
            }elseif($pl_ls_vdisp03_sww['disp03_status_01']=="3"){
              echo" <span class='badge bg-danger'> Ditolak </span>";
            }
            echo" <div class='card'>
            <div class='card-body'>
            <b>$pl_ls02_vusr01_sww[user_nama_01]</b> <br>
            $pl_ls_vdisp03_sww[disp03_ket_01]
            </div>
          </div><br>";

          }if($pl_vw_vdisp01_sww['disp_status_01']=="4" OR $pl_vw_vdisp01_sww['disp_status_01']=="2" ){
            echo"<a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_DIS02&IDDISP01=$IDDISP01&UPTTPDISP01=UPTTPDISP01' class='btn btn-dark btn-sm'><i class='fas fa-minus-circle'></i> Tutup Agenda</a>";
          }elseif($pl_vw_vdisp01_sww['disp_status_01']=="5"){
          echo"<a href='#' class='btn btn-success btn-sm'><i class='fas fa-minus-circle'></i> Selesai</a>";
          
        }
        echo"<hr>";
          #DATA DISP NOTULA
          $pl_ls_vdispnot01_sw = $CL_Q($CONN01,"$SL idmain_dispnot_01,idmain_disp_01,idmain_user_01 FROM srv_dispnot_01 WHERE idmain_disp_01='$IDDISP01'");
          $pl_ls_vdispnot01_sww = $CL_FAS($pl_ls_vdispnot01_sw);
          $pl_nr_vdispnot01_sww = $CL_NR($pl_ls_vdispnot01_sw);
          #DATA USER
          $pl_ls03_vusr01_sw = $CL_Q($CONN01,"$SL idmain_user_01,user_nama_01,user_ketnama_01 FROM srv_user_01 WHERE idmain_user_01='$pl_ls_vdispnot01_sww[idmain_user_01]'");
          $pl_ls03_vusr01_sww = $CL_FAS($pl_ls03_vusr01_sw);
          #DATA FILE NOTULA
          $pl_not_vdisp01_sw = $CL_Q($CONN01,"$SL idmain_dfile_01,idmain_relasi_01,dfile_isi_01,dfile_tglinput_01 FROM srv_dfile_01 WHERE idmain_relasi_01='$IDDISP01' order by dfile_tglinput_01 desc");
          $pl_not_vdisp01_sww = $CL_FAS($pl_not_vdisp01_sw);
          
          if($pl_nr_vdispnot01_sww > 0){
          echo"<i>notulen di unggah oleh >  $pl_ls03_vusr01_sww[user_ketnama_01] at $pl_not_vdisp01_sww[dfile_tglinput_01] </i><br>";
          #echo"<a href='../FL/$pl_not_vdisp01_sww[dfile_isi_01]' class='badge bg-dark'>Download Notulen</a>";
          }
          
          /*
          echo"<form method=post>";
            echo"<textarea class='form-control' placeholder='balasan....'></textarea>";
            echo"<button class='btn btn-success btn-sm' name='btn_disp03_up_01'>KIRIM</button>";
          echo"</form>";
          */
            include"../LOGIC/PRC/EXE_MIX.php";

?>
