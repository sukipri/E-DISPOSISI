<b>KOTAK MASUK DISPOSISI</b>
<hr>
 <a class="badge bg-warning">perlu Konfirmasi</a> = Butuh konfirmasi yang bersangkutan <!--   <a class="badge bg-primary">Proses kirim balik</a> = Menunggu respon tindak lanjut dari admin  -->
<br><br>
<table class="table table-bordered table-sm">
    <tr class="table-dark"> 
        <td>Tanggal</td>
        <td>Ket</td>
        <td>Lampiran</td>
        <td>STATUS</td>
    </tr>
    <?PHP 
            #DATA DISPOSISI 02
              $pl_ls_vdisp02_sw = $CL_Q($CONN01,"$CL_SL srv_disp_02 WHERE idmain_user_01='$hr_vusr01_sww[idmain_user_01]' order by disp02_tglinput_01 desc");
                   while( $pl_ls_vdisp02_sww = $CL_FAS($pl_ls_vdisp02_sw)){
            #DATA DISPOSISI 01
            $pl_ls_vdisp01_sw = $CL_Q($CONN01,"$CL_SL srv_disp_01 WHERE idmain_disp_01='$pl_ls_vdisp02_sww[idmain_disp_01]'");
               $pl_ls_vdisp01_sww = $CL_FAS($pl_ls_vdisp01_sw);
            #DATA DISP 03
            $pl_ls_vdis03_sw = $CL_Q($CONN01,"$SL idmain_disp_03,idmain_disp_01,disp03_status_01 FROM srv_disp_03 WHERE idmain_disp_01='$pl_ls_vdisp02_sww[idmain_disp_01]' AND idmain_user_01=' $hr_vusr01_sww[idmain_user_01]'");
            $pl_ls_vdis03_sww = $CL_FAS($pl_ls_vdis03_sw);
            $pl_nr_vdis03_sww = $CL_NR($pl_ls_vdis03_sw);
            #DATA FLAG
            $pl_disp_vflag01_sw = $CL_Q($CONN01,"$SL idmain_flag_01,flag_nama_01 FROM srv_flag_01 WHERE idmain_flag_01='$pl_ls_vdisp01_sww[idmain_flag_01]'");
            $pl_disp_vflag01_sww = $CL_FAS($pl_disp_vflag01_sw);
            #DATA NOTULA
            $pl_ls_vdispnot01_sw = $CL_Q($CONN01,"$SL idmain_dispnot_01,idmain_disp_01,idmain_user_01 FROM srv_dispnot_01 WHERE idmain_disp_01='$pl_ls_vdisp01_sww[idmain_disp_01]'");
            $pl_ls_vdispnot01_sww = $CL_FAS($pl_ls_vdispnot01_sw);
            $pl_nr_vdispnot01_sww = $CL_NR($pl_ls_vdispnot01_sw);
                    
    ?>
    <tr>
        <td><?PHP echo FS_DATE($pl_ls_vdisp02_sww['disp02_tglinput_01'])  ?> </td>
        <td><?PHP
                echo "".$pl_ls_vdisp01_sww['disp_kode_01']."";
                echo"<br>";
                echo $pl_ls_vdisp01_sww['disp_nama_01'];
                echo"<br>";
                echo "<b>#".$pl_disp_vflag01_sww['flag_nama_01']."</b>";
          ?>
        </td>
        <td> <?PHP 
                echo $pl_ls_vdisp02_sww['disp02_ket_01'];
                echo"<br>";
                if( $pl_nr_vdispnot01_sww > 0 ){ echo"<span class='badge bg-info'>NOTULEN</span>";}
            ?>
        </td>
        <td>

            <?PHP 
            
                if($pl_ls_vdisp02_sww['disp02_status_01']=="4"){
                    echo"<a href='?' class='badge bg-success'><i class='fas fa-check-square'></i> APPROVED</a>";
                }elseif($pl_ls_vdisp02_sww['disp02_status_01']=="3"){
                    echo"<a href='?' class='badge bg-danger'><i class='fas fa-check-square'></i> REJECTED</a>";
                }elseif($pl_ls_vdisp02_sww['disp02_status_01']=="2"){
                    echo"<a href='?PG_SA=PL_APP_01&PG_SA_SUB=PL_APP_01_IN_DISAPP&IDDISP01=$pl_ls_vdisp02_sww[idmain_disp_01]' class='badge bg-warning '><i class='fas fa-check-square'></i> Perlu konfirmasi</a>";
                
                }elseif($pl_ls_vdisp02_sww['disp02_status_01']=="5"){
                echo"<a href='#' class='badge bg-success '><i class='fas fa-check-square'></i> Selesai</a>";
            }

             
            ?>
        </td>
    </tr>
    <?PHP } ?>
</table>