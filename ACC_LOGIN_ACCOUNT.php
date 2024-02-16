<?php //session_start(); ?>
<div style="padding-top:20px;"></div>
<div class="container">
<?php include"../DIST/DIST_GET.php";  ?>
<form method="post"> <!-- action="../LOGIC/ACS/ACS_LOGIN.php" -->
<div class="card border-primary mb-3" style="max-width: 30rem;">
  <div class="card-header"><i class="fas fa-lock"></i>&nbsp;Login User</div>
  <div class="card-body">
    <h4 class="card-title">Login Access Admin</h4>
	   <input type="hidden"   class="form-control form-control-sm" value="<?php echo"$ep_vqa01_sww[qa_02]"; ?>" name="tanya_us" readonly="readonly" />
       <input type="text" name="us_nama" class="form-control form-control-sm" style="max-width:15rem;" placeholder="Username....." required autocomplete="off" />
        <br />
         <input type="password" name="us_pass" class="form-control form-control-sm" style="max-width:15rem;" placeholder="password....." required autocomplete="off" />
         <br />
           <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><?php echo"$ep_vqa01_sww[qa_01]"; ?></span>
          </div>
          <input autocomplete="off" type="text" required class="form-control" name="jawab_us"  style="max-width:6rem;" placeholder="Answer.." aria-label="Username" aria-describedby="basic-addon1">
        </div>
         
         <br />
         <button name="ep_acs_login" class="btn btn-success"><i class="fas fa-sign-in-alt"></i>&nbsp;LOGIN</button>
       <?php include"../LOGIC/ACS/ACS_LOGIN.php"; ?> 
  </div>
</form>
</div>