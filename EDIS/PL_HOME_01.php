<?PHP 
#error_reporting(0);
    ob_start();
    session_start();    
    include"../DIST/DIST_GET.php";
    if(empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
        include_once"../LOGIC/PG/PG_H_LOCATION.php";
    }else{
       
         

?>
        <?PHP include"PL_MENU_01.php"; ?>
        <div style="padding-top:1rem;"></div>
            <?PHP include"../LOGIC/PG/PG_SA.php"; ?>
            <div style="padding-top:5rem;"></div>
            <?PHP include"../LAYOUT/COPYRIGHT/COPY_FOOTER_01.php"; ?>


<?PHP } ob_flush(); ?>