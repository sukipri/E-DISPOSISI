<?PHP 
    $RJAM01 = @$SQL_ESC($CONN01,$_GET['RJAM01']);
?>
<form method="post">
<div class="card border-primary mb-3" style="max-width: 30rem;">
  <div class="card-header"><i class="fas fa-plus-circle"></i> Booking Ruangan <?PHP echo $pl_vw_vruang01_sww['ruang_nama_01'] ?></div>
  <div class="card-body">
    <!--  -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@Undangan</span>
              <select name="pemr_idmain_disp_01" class="form-control form-control-sm" required>
                <option value=""></option>
                <?PHP 
                    $pl_ls_vdisp01_sw  = $CL_Q($CONN01,"$SL idmain_disp_01,disp_nama_01 FROM srv_disp_01 WHERE idmain_flag_01='123123jh2h3jh2j3h00'");
                        while($pl_ls_vdisp01_sww = $CL_FAS($pl_ls_vdisp01_sw)){
                            echo"<option value=$pl_ls_vdisp01_sww[idmain_disp_01]>$pl_ls_vdisp01_sww[disp_nama_01]</option>";
                        }
                ?>
                </select>
        </div>
        
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@TGL & Jam</span>
        <input type="date" class="form-control form-control-sm" required name="pemruang_tglmasuk_01" value="<?PHP echo $TG01; ?>">
        <input type="time" class="form-control form-control-sm" required name="pemruang_jamasuk_01" value="<?PHP echo $RJAM01; ?>">
        </div>
        <br>
        <button class="btn btn-success btn-sm" name="btn_simpan_pruang02_01">SIMPAN DATA</button>

</form>
</div>
                        <!-- DATA SAVING -->
                    <?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>