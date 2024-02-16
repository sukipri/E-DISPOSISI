<?PHP include"../DIST/DIST_GET.php"; ?>
<style>
.bg {
  background-image: url("https://rspwc.net/E-PWC/CDN/bukumeja2.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 100%; /* You must set a specified height */
  width:auto;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}
</style>
<div class="bg">
<div class="container">

<br>
<form method="post">
<div class="card border-secondary mb-3" style="max-width: 20rem;">
  <div class="card-header">DiAm - LOGIN AKSES</div>
  <div class="card-body">
  <input type="hidden"   class="form-control form-control-sm" value="<?php echo"$pl_vqa01_sww[qa_02]"; ?>" name="tanya_us" readonly="readonly" />
        <!-- -->
            <input type="text" class="form-control form-control-sm" name="us_nama" required autocomplete="off" placeholder="Username....">
            <br>
            <input type="password" placeholder="Password..." class="form-control form-control-sm" name="us_pass" required autocomplete="off">
            <br>
            <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><?php echo"$pl_vqa01_sww[qa_01]"; ?></span>
          </div>
          <input autocomplete="off" type="text" required class="form-control" name="jawab_us"  style="max-width:6rem;" placeholder="Answer..">
        </div>
            <button class="btn btn-dark" name="hr_acs_login">LOGIN</a>
        <!-- -->
  </div>
</div>
</form>
    <?PHP include"../LOGIC/ACS/ACS_LOGIN.php"; ?>
</div>
</div>
