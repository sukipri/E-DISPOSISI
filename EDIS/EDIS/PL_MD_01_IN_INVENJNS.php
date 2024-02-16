<div class="card border-primary mb-3" style="max-width: 40rem;">
  <div class="card-header"><i class="fas fa-plus-circle"></i> ENTRI JENIS INVENTARIS</div>
  <div class="card-body">
    <!--  -->
    <form method="post">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@NAMA JENIS</span>
        <input type="text" class="form-control" placeholder="Nama Jenis" autocomplete="off" name="flag_nama_01" aria-label="Username" aria-describedby="basic-addon1" required value="<?PHP echo $pl_vw_vflag01_sww['flag_nama_01'] ?>">
    </div>
    <br>
    <?PHP if(isset($_GET['UPFLAG01'])){ ?>
      <button class="btn btn-danger btn-sm" name="update_invenjns_01">UPDATE DATA</button>
      <?PHP }else{ ?>
      <button class="btn btn-success btn-sm" name="simpan_invenjns_01">SIMPAN DATA</button>
    <?PHP } ?>
    </form>
    <!--  -->
  </div>
</div>
<?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>
<hr>
<b>PREVIEW LABEL DISPOSISI</b>
<table class="table table-bordered table-sm table-striped" style="max-width:30rem;">
  <tr class="table-dark">
      <td>KODE</td>
      <td>NAMA</td>
      <td>-</td>
  </tr>
  <?PHP 
      $pl_disp_vflag01_sw = $CL_Q($CONN01,"$SL idmain_flag_01,flag_kode_01,flag_nama_01 FROM srv_flag_01 WHERE flag_jenis_01='INVEN'");
      while($pl_disp_vflag01_sww = $CL_FAS($pl_disp_vflag01_sw)){
  ?>
  <tr>
      <td><?PHP echo $pl_disp_vflag01_sww['flag_kode_01'] ?></td>
      <td><?PHP echo $pl_disp_vflag01_sww['flag_nama_01'] ?></td>
      <td><?PHP echo"<a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_DISJNS&IDFLAG01=$pl_disp_vflag01_sww[idmain_flag_01]&UPFLAG01=UPFLAG01' class='badge bg-warning'>UPDATE</a>"; ?></td>
  </tr>
  <?PHP } ?>
</table>