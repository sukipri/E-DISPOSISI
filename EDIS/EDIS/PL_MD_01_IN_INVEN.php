<div class="card border-primary mb-3" style="max-width: 40rem;">
  <div class="card-header"><i class="fas fa-plus-circle"></i> ENTRI INVENTARIS RENT</div>
  <div class="card-body">
    <!--  -->
    <form method="post">
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control form-control-sm" style="max-width: 15rem;" name="inven_kode_01" placeholder="Kode Inven" value="<?PHP echo  $KODE_NOMOR02; ?>">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@JENIS</span>
        <select name="idmain_inven_flag_01" style="max-width: 15rem;" class="form-control form-control-sm" required>
        <option value="">-</option>
        <?PHP 
            $pl_inven_vflag01_sw = $CL_Q($CONN01,"$SL idmain_flag_01,flag_nama_01 FROM srv_flag_01 WHERE flag_jenis_01='INVEN'");
            while($pl_inven_vflag01_sww = $CL_FAS($pl_inven_vflag01_sw)){
                    if($pl_vw_vinven01_sww['idmain_flag_01']==$pl_inven_vflag01_sww['idmain_flag_01']){
                        echo"<option value=$pl_inven_vflag01_sww[idmain_flag_01] selected>$pl_inven_vflag01_sww[flag_nama_01]</option>";
                    }else{
                     echo"<option value=$pl_inven_vflag01_sww[idmain_flag_01]>$pl_inven_vflag01_sww[flag_nama_01]</option>";
                    }
            }
        ?>
        </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Keterangan</span>
        <textarea class="form-control form-control-sm" required name="inven_ket_01"><?PHP echo $pl_vw_vinven01_sww['inven_ket_01'] ?></textarea>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@JML</span>
        <input type="number" class="form-control form-control-sm" style="max-width: 15rem;" name="inven_jml_01" placeholder="Jumlah barang.." value="<?PHP echo  $pl_vw_vinven01_sww['inven_jml_01']; ?>">
    </div>

    <br>
    <?PHP if(@$_GET['UPINVEN01']=="UPINVEN01"){ ?>
      <button class="btn btn-warning btn-sm" name="update_inven_01">UPDATE DATA</button>
    <?PHP }else{ ?>
      <button class="btn btn-success btn-sm" name="simpan_inven_01">SIMPAN DATA</button>
    <?PHP } ?>
    </form>
    <!--  -->
  </div>
</div>
<?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>