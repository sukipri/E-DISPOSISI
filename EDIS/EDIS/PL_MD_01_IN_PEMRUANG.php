<form method="post">
<div class="card border-primary mb-3" style="max-width: 30rem;">
  <div class="card-header"><i class="fas fa-plus-circle"></i> Penjadwalan Ruang</div>
  <div class="card-body">
    <!--  -->
    <div class="input-group input-group-sm mb-3">
      <input type="date" class="form-control form-control-sm" name="txt_tg01_01" required>
      <!-- <input type="time" class="form-control form-control-sm" name="pemruang_jamasuk_01" required> -->
      <select name="slc_ruang_01" class="form-control form-control-sm" required>
      <option value=""></option>
      <?PHP 
          $pl_sl_vruang01_sw = $CL_Q($CONN01,"$SL idmain_ruang_01,ruang_nama_01 FROM srv_ruang_01 order by ruang_nama_01 asc");
          while($pl_sl_vruang01_sww = $CL_FAS($pl_sl_vruang01_sw)){
            echo"<option value=$pl_sl_vruang01_sww[idmain_ruang_01]>$pl_sl_vruang01_sww[ruang_nama_01]</option>";
          }
      ?>
      </select>
      <button class="btn btn-success btn-sm" name="btn_pemruang_01">CEK PEMAKAIAN</button>
  </div>
    <!--  -->
  </div>
</div>
</form>
<?PHP 
    if(isset($_POST['btn_pemruang_01'])){
      $txt_tg01_01 = @$_POST['txt_tg01_01'];
      $slc_ruang_01 = @$_POST['slc_ruang_01'];
      #DATA TRACK
      $pl_tr_vruang01_sw = $CL_Q($CONN01,"$SL idmain_ruang_01,ruang_nama_01 FROM srv_ruang_01 WHERE idmain_ruang_01='$slc_ruang_01'");
        $pl_tr_vruang01_sww = $CL_FAS($pl_tr_vruang01_sw);

      echo "<span class='badge bg-info'>". FS_DATE($txt_tg01_01)." -  $pl_tr_vruang01_sww[ruang_nama_01]</span>";
?>
    <!--  -->
    <table class="table table-sm table-bordered table-striped">
      <tr class="table-dark">
          <td width="20%">JAM</td>
          <td>-</td>
          <td>Pemakaian</td>
      </tr>
      <?PHP 
          //membuat array yang berisi nama buah-buahan
          $pemruang_jam_no = 0;
        $pemruang_jam = array('00:00','01:00','02:00','03:00','04:00','05:00','06:00','07:00','08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00','24:00');
        //menampilkan data array dengan nomor urut 2
       while($pemruang_jam_no <= 24 ){ ?>
     
      <tr>
          <td><?PHP echo "$pemruang_jam[$pemruang_jam_no]"; ?></td>
          <td>-</td>
          <td>
            <?PHP
              #DATA PEM RUANG
                $pl_ls_vpemruang01_sw = $CL_Q($CONN01,"$CL_SL srv_ruangpem_01 WHERE pemruang_jamasuk_01='$pemruang_jam[$pemruang_jam_no]' AND pemruang_tglmasuk_01='$txt_tg01_01' AND idmain_ruang_01='$slc_ruang_01'");
                $pl_nr_ls_vpemruang01_sw = $CL_NR($pl_ls_vpemruang01_sw);
                $pl_ls_vpemruang01_sww = $CL_FAS($pl_ls_vpemruang01_sw);
                #DATA DISP
                $pl_ls_vdisp01_sw = $CL_Q($CONN01,"$SL idmain_disp_01,disp_nama_01 FROM srv_disp_01 WHERE idmain_disp_01='$pl_ls_vpemruang01_sww[idmain_disp_01]'");
                $pl_ls_vdisp01_sww = $CL_FAS($pl_ls_vdisp01_sw);
                if($pl_nr_ls_vpemruang01_sw > 0){
                    echo "<span class='badge bg-primary'><i class='far fa-file-alt'></i> ".$pl_ls_vdisp01_sww['disp_nama_01']."</span>";
                }else{
                  echo "<a href='' class='badge bg-secondary'><i class='fas fa-plus-circle'></i> Pesan</a>";
                }
            ?>
          </td>
      </tr>
      <?PHP  $pemruang_jam_no++; } ?>
    </table>
<?PHP } ?>
