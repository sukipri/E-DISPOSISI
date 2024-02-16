<div class="card border-primary mb-3" style="max-width: 40rem;">
  <div class="card-header"><i class="fas fa-plus-circle"></i> ENTRI DISPOSISI</div>
  <div class="card-body">
    <!--  -->
    <form method="post">
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">@Tujuan</span>
        <select name="idmain_flag_01" class="form-control form-control-sm" required style="max-width:10rem">
          <option value=""></option>
          <?PHP 
              $edis_disp_vflag01_sw = $CL_Q($CONN01,"$SL idmain_flag_01,flag_jenis_01,flag_nama_01 FROM srv_flag_01 WHERE flag_jenis_01='DISP' ");
                while($edis_disp_vflag01_sww = $CL_FAS($edis_disp_vflag01_sw)){
                  if($edis_disp_vflag01_sww['idmain_flag_01']==$pl_vw_vdisp01_sww['idmain_flag_01']){

                    echo"<option value=$edis_disp_vflag01_sww[idmain_flag_01] selected>$edis_disp_vflag01_sww[flag_nama_01]</option>";

                  }else{
                  
                  echo"<option value=$edis_disp_vflag01_sww[idmain_flag_01]>$edis_disp_vflag01_sww[flag_nama_01]</option>";
                  }
                }
          ?>
        </select>
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">@Nomor Surat</span>
        <input type="text" class="form-control form-control-sm" name="disp_kode_01" autocomplete="off"   value="<?PHP echo"$KODE_NOMOR"; ?>" required style="max-width: 20rem;">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">@Nama Surat</span>
        <input type="text" class="form-control form-control-sm" name="disp_nama_01" autocomplete="off"   value="<?PHP echo"$pl_vw_vdisp01_sww[disp_nama_01]"; ?>" required style="max-width: 20rem;">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">@Tanggal Masuk</span>
        <input type="date" class="form-control form-control-sm" name="disp_tglmasuk_01"   value="<?PHP echo"$pl_vw_vdisp01_sww[disp_tglmasuk_01]"; ?>" required style="max-width: 20rem;">
    </div>

   

    <br>
    <?PHP if(@$_GET['UPDISP01']=="UPDISP01"){ ?>
      <button class="btn btn-warning btn-sm" name="update_disp_01">UPDATE DATA</button>
    <?PHP }else{ ?>
      <button class="btn btn-success btn-sm" name="simpan_disp_01">SIMPAN DATA</button>
    <?PHP } ?>

    </form>
    <!--  -->
  </div>
</div>
<?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>