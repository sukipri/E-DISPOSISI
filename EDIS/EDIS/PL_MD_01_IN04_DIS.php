<div class="card border-primary mb-3" style="max-width: 30rem;">
  <div class="card-header"><i class="fas fa-paper-plane"></i> Teruskan Surat</div>
  <div class="card-body">
    <form method="post">
    <!--  -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
       <input type="text" class="form-control form-control-sm" value="<?PHP echo $pl_vw_vdisp01_sww['disp_kode_01'] ?>" readonly>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Kirim Ke -</span>
       <select name="disp02_idmain_user_01" class="form-control form-control-sm" required>
        <?PHP 
          $pl_sl_vusr01_sw = $CL_Q($CONN01,"$SL idmain_user_01 , user_nama_01 FROM srv_user_01 WHERE user_hak_01='2'   ");
          echo"<option value=>-</option>";
            while($pl_sl_vusr01_sww  = $CL_FAS($pl_sl_vusr01_sw)){
              echo "<option value=$pl_sl_vusr01_sww[idmain_user_01]>$pl_sl_vusr01_sww[user_nama_01]</option>";
            }
        ?>
        </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Keterangan</span>
            <textarea name="disp02_ket_01" class="form-control"><?PHP #echo $pl_vw_vdisp01_sww['disp_ket_01'] ?></textarea>
    </div> *Berikan keterangan singkat 
            <br>

    <button class="btn btn-success btn-sm" name="simpan_disp_04">SIMPAN DATA</button>
    </form>
    <hr>
    <?PHP 
        #DATA USER
         #DATA USER TERKAIT
         $pl_ls_vdisp02_sw = $CL_Q($CONN01,"$SL idmain_disp_02,idmain_disp_01,idmain_user_01 FROM  srv_disp_02 WHERE idmain_disp_01='$IDDISP01'");
         
         echo"<b>#Akun Terkait</b>";
         echo"<br>";
         while($pl_ls_vdisp02_sww = $CL_FAS($pl_ls_vdisp02_sw)){
           #DATA USER TERKAIT
           $pl_ls_vusr01_sw = $CL_Q($CONN01,"$SL idmain_user_01,user_nama_01,user_ketnama_01 FROM srv_user_01 WHERE idmain_user_01='$pl_ls_vdisp02_sww[idmain_user_01]'");
           $pl_ls_vusr01_sww = $CL_FAS($pl_ls_vusr01_sw);
 
             echo"<li>$pl_ls_vusr01_sww[user_ketnama_01] - <a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN04_DIS&IDDELDISP01=$IDDISP01&DELDISP01=DELDISP01&IDDISP01=$IDDISP01' class='badge bg-danger'>DELETE</a></li>";
         }
    ?>
    <!--  -->
    <?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>
    <?PHP 
        #DELETE DATA USER TERKAIT
        if(@$_GET['DELDISP01']){
          $del_usr_disp_02 = $CL_Q($CONN01,"$DL FROM srv_disp_02 WHERE idmain_disp_01='$IDDELDISP01'");
          header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN04_DIS&IDDISP01=$IDDISP01");
        }
    ?>
  </div>
</div>