<?PHP 
    ob_start();
    session_start();
    include"../DIST/DIST_GET.php"; 
    if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){

}else{

    $vus01_sw = $CL_Q($CONN01,"$CL_SL ep_user_01 WHERE user_nama_01='$_SESSION[namauser]' AND user_hak_01='1'");
    $vus01_sww = $CL_FAS($vus01_sw);

?>
   <body>
        <?PHP #HANDLING USER
                if($vus01_sww['user_hak_01']=="1"){
         ?>
        <!-- CONTENT -->
                  <?PHP include_once"EP-ADMIN/EPA_MENU_01.php"; ?>
                  <div class="container">
                    <div style="padding-top:2rem;"></div>
                      <?PHP include"../LOGIC/PG/PG_SA.php"; ?>
                </div>
                <div style="padding-top:2rem;"></div>
                <?PHP include"EP_FOOTER_01.php"; ?>
                    
         <!-- //COntent -->

   <?PHP }else{ ?>
    
    <?PHP include"../LOGIC/PG/PG_H_LOCATION.php"; } ?>
</body>
<?PHP  } ob_flush(); ?>