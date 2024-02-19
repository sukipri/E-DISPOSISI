<div class="card border-primary mb-3" style="max-width: 40rem;">
  <div class="card-header"><i class="fas fa-plus-circle"></i> ENTRI RUANG</div>
  <div class="card-body">
    <!--  -->
    <form method="post">
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">@Kode Ruang</span>
       <input type="text" style="max-width:20rem;" autocomplete="off" value="<?PHP echo $pl_vw_vruang01_sww['ruang_kode_01'] ?>" class="form-control form-control-sm" required name="ruang_kode_01" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">@Ruang Nama</span>
       <input type="text" style="max-width:20rem;" class="form-control form-control-sm" value="<?PHP echo $pl_vw_vruang01_sww['ruang_nama_01'] ?>" autocomplete="off" required name="ruang_nama_01" aria-label="Username" aria-describedby="basic-addon1">
    </div>
      <br>
      <?PHP if(@$_GET['UPRUANG01']=="UPRUANG01"){ ?>
        <button class="btn btn-danger btn-sm" name="update_ruang_01">UPDATE DATA</button>
    <?PHP }else{ ?>
      <button class="btn btn-success btn-sm" name="simpan_ruang_01">SIMPAN DATA</button>
    <?PHP } ?>
    </form>
    <!--  -->
  </div>
</div>
<?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>
<br>
<table class="table table-striped table-bordered table-sm" style="max-width:40rem;">
  <tr class="table-dark">
      <td>Kode</td>
      <td>Nama</td>
      <td>-</td>
  </tr>
  <?PHP
    #DATA ruang
      $pl_sl_vruang01_sw = $CL_Q($CONN01,"$CL_SL srv_ruang_01 order by ruang_nama_01 asc");
        while($pl_sl_vruang01_sww = $CL_FAS($pl_sl_vruang01_sw)){
  ?>
  <tr>
      <td><?PHP echo $pl_sl_vruang01_sww['ruang_kode_01'] ?></td>
      <td><?PHP echo $pl_sl_vruang01_sww['ruang_nama_01'] ?></td>
      <td><?PHP echo"<a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_RUANG&UPRUANG01=UPRUANG01&IDRUANG01=$pl_sl_vruang01_sww[idmain_ruang_01]' class='badge bg-warning'>UPDATE</a>";  ?></td>
  </tr>
    <?PHP } ?>
</table>