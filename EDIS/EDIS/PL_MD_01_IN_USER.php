<div class="card border-primary mb-3" style="max-width: 40rem;">
  <div class="card-header"><i class="fas fa-plus-circle"></i> ENTRI USER</div>
  <div class="card-body">
    <!--  -->
    <form method="post">
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">@Username</span>
        <input type="text" class="form-control form-control-sm" name="user_nama_01" value="<?PHP echo"$pl_vw_vusr01_sww[user_nama_01]"; ?>" autocomplete="off" placeholder="Username" required style="max-width: 25rem;">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">@Nama Lengkap</span>
        <input type="text" class="form-control form-control-sm" name="user_ketnama_01" value="<?PHP echo"$pl_vw_vusr01_sww[user_ketnama_01]"; ?>" autocomplete="off" placeholder="Username" required style="max-width: 25rem;">
    </div>

    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">@Password</span>
        <input type="password" class="form-control form-control-sm" name="user_pass_01"  placeholder="Password" value="<?PHP echo"$pl_vw_vusr01_sww[user_passtext_01]"; ?>" required style="max-width: 20rem;">
    </div>

    <div class="input-group input-group-sm mb-3" style="max-width: 17rem;">
        <span class="input-group-text" id="basic-addon1">@AKSES</span>
       <select name="user_hak_01" class="form-control form-control-sm">
      
      <?PHP if($pl_vw_vusr01_sww['user_hak_01']=="1"){ ?>
      <option value="1">SUPER ADMIN</option>
      <option value="2">ADMIN CLIENT</option>
      <?PHP }elseif($pl_vw_vusr01_sww['user_hak_01']=="2"){ ?>
      <option value="2">ADMIN CLIENT</option>
      <option value="1">SUPER ADMIN</option>
      <?PHP }else{?>
      <option value="">-</option>
      <option value="1">SUPER ADMIN</option>
      <option value="2">ADMIN CLIENT</option>
      <?PHP } ?>
      </select>
    </div>

    <br>
    <?PHP if(@$_GET['UPUSR01']=="UPUSR01"){ ?>
    <button class="btn btn-danger btn-sm" name="update_user_01">UPDATE DATA</button>
    <?PHP }else{ ?>
      <button class="btn btn-success btn-sm" name="simpan_user_01">SIMPAN DATA</button>
    <?PHP } ?>
    </form>
    <!--  -->
  </div>
</div>
<?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>