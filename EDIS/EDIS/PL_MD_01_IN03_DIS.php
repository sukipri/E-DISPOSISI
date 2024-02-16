<a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN02_DIS" class="btn btn-dark btn-sm"><i class="fas fa-angle-double-left"></i> </a> <?PHP echo"Upload Surat $pl_vw_vdisp01_sww[disp_nama_01]"; ?>
<hr>
<form  method="post" enctype="multipart/form-data">
  <div class="input-group mb-3" style="max-width:20rem;">
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control form-control-sm">
    <button class="btn btn-success btn-sm" name="btn_upload">UPLOAD DATA</button>
    </div>
    
    <textarea class="form-control" name="dfile_ket_01" required placeholder="Isikan ketarangan lampiran..."></textarea>
</form>

<?php

    error_reporting(0);
    $target_dir = "../FL/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $rand_text_file ="DISP_$IDMAIN.$imageFileType";
    $rand_file = $target_dir."DISP_$IDMAIN.$imageFileType";
    $dfile_ket_01 = @$SQL_ESC($CONN01,$_POST['dfile_ket_01']);
    // Check if image file is a actual image or fake image
    if(isset($_POST["btn_upload"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    #echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "doc" ) {
    echo "Sorry, extention not allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $rand_file)) {
        $upload_dfile_01 = $CL_Q($CONN01,"$IN srv_dfile_01 (idmain_dfile_01,idmain_relasi_01,dfile_isi_01,dfile_tglinput_01,dfile_uploader_01,dfile_ket_01)VALUES('$IDMAIN','$IDDISP01','$rand_text_file','$DATE_HTML5_SQL','$hr_vusr01_sww[idmain_user_01]','$dfile_ket_01')"); #INSERT FILE DISPOSISI
        $update_disp_01 = $CL_Q($CONN01,"$UP srv_disp_01 SET disp_status_01='2' WHERE idmain_disp_01='$IDDISP01'");
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        header("LOCATION:?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN02_DIS");
        #echo"$rand_file";
    } else {
        echo "Sorry, there was an error uploading your file.";
    } }

?>