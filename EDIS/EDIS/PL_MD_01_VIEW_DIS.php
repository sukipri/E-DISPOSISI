<b>DAFTAR DISPOSISI</b>
<hr>
<form method="post">
<div class="input-group mb-3" style="max-width:30rem;">
  <input type="date" class="form-control" required name="txt_tg01">
  <input type="date" class="form-control" required name="txt_tg02">
  <button class="btn btn-success btn-sm" name="btn_cari_data">CARI DATA</button>
</div>
</form>
<b>DATA DISPOSISI</b>
<hr>
<?PHP 
  if(isset($_POST['btn_cari_data'])){
    $txt_tg01 = @$SQL_ESC($CONN01,$_POST['txt_tg01']);
    $txt_tg02 = @$SQL_ESC($CONN01,$_POST['txt_tg02']);
?>
<table class="table table-bordered table-sm table-striped">
    <tr class="table-dark">
    <td>#</td>
    <td>Nomor</td>
    <td>Jenis</td>
    <td>Ket</td>
    <td>Status</td>
    <td>Aksi</td>
    </tr>
    <?PHP 
        #DATA disp 01
        $no_dis = 1;
        $edis_sl_vdis01_sw = $CL_Q($CONN01,"$CL_SL srv_disp_01 WHERE disp_tglmasuk_01 BETWEEN '$txt_tg01' AND '$txt_tg02'  order by disp_tglinput_01 desc ");
         while($edis_sl_vdis01_sww = $CL_FAS($edis_sl_vdis01_sw)){
            #DATA FLAG
        $pl_disp_vflag01_sw = $CL_Q($CONN01,"$SL idmain_flag_01,flag_nama_01 FROM srv_flag_01 WHERE idmain_flag_01='$edis_sl_vdis01_sww[idmain_flag_01]'");
        $pl_disp_vflag01_sww = $CL_FAS($pl_disp_vflag01_sw);
        #DATA FILE
        $pl_ls_vdfile01_sw = $CL_Q($CONN01,"$SL idmain_dfile_01,idmain_relasi_01 FROM srv_dfile_01 WHERE idmain_relasi_01='$edis_sl_vdis01_sww[idmain_disp_01]'");
        $pl_ls_vdfile01_sww = $CL_FAS($pl_ls_vdfile01_sw);
        $pl_nr_vdfile01_sww = $CL_NR($pl_ls_vdfile01_sw);
    ?>
    <tr>
    <td><?PHP echo $no_dis; ?></td>
    <td><?PHP echo "<a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_DIS&IDDISP01=$edis_sl_vdis01_sww[idmain_disp_01]&UPDISP01=UPDISP01'>".$edis_sl_vdis01_sww['disp_kode_01']."</a>"; ?></td>
    <td><?PHP echo $pl_disp_vflag01_sww['flag_nama_01'] ?></td>
    <td><?PHP echo "".$edis_sl_vdis01_sww['disp_nama_01'].""; ?>
            <br>
            <?PHP  if($pl_nr_vdfile01_sww > 0){ echo"<span class='badge bg-secondary'>Terlampir</span>";} ?>
    </td>
    <td>
        <?PHP 
            if($edis_sl_vdis01_sww['disp_status_01']=="1"){
               echo" <span class='badge bg-info'> PROSES </span>";
            }elseif($edis_sl_vdis01_sww['disp_status_01']=="2"){
                echo" <span class='badge bg-primary'> TERKIRIM </span>";
            }elseif($edis_sl_vdis01_sww['disp_status_01']=="21"){
                echo" <span class='badge bg-primary'> Proses tindak lanjut </span>";
            }elseif($edis_sl_vdis01_sww['disp_status_01']=="4"){
                echo" <span class='badge bg-success'> APPROVED </span>";
            }elseif($edis_sl_vdis01_sww['disp_status_01']=="5"){
                echo" <span class='badge bg-success'> Selesai </span>";
            }
        ?>
    </td>
    <td>
        <?PHP
            #if($edis_sl_vdis01_sww['disp_status_01']=="1"){
                echo"<a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN03_DIS&IDDISP01=$edis_sl_vdis01_sww[idmain_disp_01]' class='badge  bg-primary'>Upload Surat <i class='fas fa-arrow-alt-circle-up'></i> </a>";
            #}elseif($edis_sl_vdis01_sww['disp_status_01']=="2"){
                echo"<a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN04_DIS&IDDISP01=$edis_sl_vdis01_sww[idmain_disp_01]' class='badge  bg-warning'>TERUSKAN <i class='fas fa-angle-double-right'></i> </a>";
                echo"<a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_DIS02&IDDISP01=$edis_sl_vdis01_sww[idmain_disp_01]' class='badge  bg-info'>Detail<i class='fas fa-external-link-square-alt'></i> </a>";

            #}
        ?>
    </td>
    </tr>
    <?PHP $no_dis++; } ?>
</table>
<?PHP } ?>
<br>
<b>#AKSI</b><br>
<a class="badge bg-primary">Upload Surat</a> = peng-uploadtan surat dari luar instansi | <a class="badge bg-warning">TERUSKAN</a> = Pengiriman kepada yang terkait 
<br><br>
