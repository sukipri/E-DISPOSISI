 <?PHP echo"Upload Surat NOTULEN $pl_vw_vdisp01_sww[disp_nama_01]"; ?>
<hr>
<a href="./../DRAFT/TEMPNOTULA.docx" class="btn btn-info btn-sm"><i class="fas fa-file-alt"></i> Download template</a>
<br><br>
<form  method="post" enctype="multipart/form-data">
    <select name="idmain_disp_01" class="form-control form-control-sm" required style="max-width:20rem;">
    <?PHP 
        #DATA DISP 02
         $pl_ls_vdisp02_sw = $CL_Q($CONN01,"$SL idmain_disp_02,idmain_disp_01,idmain_user_01 FROM srv_disp_02 WHERE idmain_user_01='$hr_vusr01_sww[idmain_user_01]' AND disp02_status_01='4'");
         echo"<option value=>PILIH AGENDA.... </option>";
         while($pl_ls_vdisp02_sww = $CL_FAS($pl_ls_vdisp02_sw)){
        #DATA DISP 01
        $pl_ls_vdisp01_sw = $CL_Q($CONN01,"$SL idmain_disp_01,disp_nama_01 FROM srv_disp_01 WHERE idmain_disp_01='$pl_ls_vdisp02_sww[idmain_disp_01]'");
        $pl_ls_vdisp01_sww = $CL_FAS($pl_ls_vdisp01_sw);
            echo"<option value=$pl_ls_vdisp02_sww[idmain_disp_01]> $pl_ls_vdisp01_sww[disp_nama_01]</option>";
         }
    ?>
    </select>
  <div class="input-group mb-3" style="max-width:20rem;">
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control form-control-sm">
    <button class="btn btn-success btn-sm" name="btn_upload">UPLOAD DATA</button>
    </div>
    <textarea class="form-control" name="dfile_ket_01" required placeholder="Isikan ketarangan notulen..."></textarea>
</form>

<?php

    error_reporting(0);
    $target_dir = "../FL/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $rand_text_file ="NOT_$IDMAIN.$imageFileType";
    $rand_file = $target_dir."NOT_$IDMAIN.$imageFileType";
    $idmain_disp_01 = @$SQL_ESC($CONN01,$_POST['idmain_disp_01']);
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
        $upload_dfile_01 = $CL_Q($CONN01,"$IN srv_dfile_01 (idmain_dfile_01,idmain_relasi_01,dfile_isi_01,dfile_tglinput_01,dfile_uploader_01,dfile_ket_01)VALUES('$IDMAIN','$idmain_disp_01','$rand_text_file','$DATE_HTML5_SQL','$hr_vusr01_sww[idmain_user_01]','$dfile_ket_01')"); #INSERT FILE DISPOSISI
        $save_dispnot_01 = $CL_Q($CONN01,"$IN srv_dispnot_01(idmain_dispnot_01,idmain_disp_01,idmain_user_01,idmain_file_01,dispnot_ket_01)VALUES('$IDMAIN','$idmain_disp_01','$hr_vusr01_sww[idmain_user_01]','$IDMAIN','$dfile_ket_01')");
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        header("LOCATION:?PG_SA=PL_APP_01&PG_SA_SUB=PL_APP_01_VIEW_DISAPP");
        #echo"$rand_file";
    } else {
        echo "Sorry, there was an error uploading your file.";
    } }

?>