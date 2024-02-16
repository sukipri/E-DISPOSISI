<b> <?PHP
     echo  $pl_vw_vdisp01_sww['disp_nama_01'];
        echo"<br>";
        echo FS_DATE($pl_vw_vdisp01_sww['disp_tglmasuk_01']);
    ?>
</b>
<hr>
<form method="post">
<?PHP 
#DATA FILE
$pl_ls_vdfile01_sw = $CL_Q($CONN01,"$CL_SL srv_dfile_01 WHERE idmain_relasi_01='$IDDISP01' ");
while($pl_ls_vdfile01_sww = $CL_FAS($pl_ls_vdfile01_sw)){
    
       echo"<a href='../FL/$pl_ls_vdfile01_sww[dfile_isi_01]' class='btn btn-info btn-sm' target='_blank'><i class='far fa-file'></i> $pl_ls_vdfile01_sww[dfile_ket_01]</a> &nbsp";
   
}
    echo"<br><br>";
    echo"<figcaption class='blockquote-footer'> <cite title='Source Title'>Cek lampiran yang terlampir untuk menerima hal yang disampaikan</cite>  </figcaption>";
    echo"<br>";
    echo"Keterangan";
    echo"<textarea class='form-control' name='disp03_ket_01'></textarea>";
    echo"<button class='btn btn-success btn-sm'  name='simpan_disapp_01'>TERIMA DISPOSISI</button>";
    echo"&nbsp";
    echo"<button class='btn btn-danger btn-sm' name='simpan_undisapp_01'>TOLAK DISPOSISI</button>";
    
?>
</form>
    <?PHP include"../LOGIC/PRC/EXE_MIX.php"; ?>

