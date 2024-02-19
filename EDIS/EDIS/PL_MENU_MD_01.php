<?PHP if($hr_vusr01_sww['user_hak_01']=="1"){ ?>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        DATA ENTRI #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!--  -->
        <?PHP if($hr_vusr01_sww['user_hak_01']=="1"){ ?>
            <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_USER" class="badge bg-primary"><i class="fas fa-plus-circle"></i> Entri User</a><br>
            <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_DISJNS" class="badge bg-primary"><i class="fas fa-plus-circle"></i> Entri Jenis Disposisi</a><br>
            <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_INVENJNS" class="badge bg-primary"><i class="fas fa-plus-circle"></i> Entri Jenis Inven</a><br>
            <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_RUANG" class="badge bg-primary"><i class="fas fa-plus-circle"></i> Entri Ruang </a><br>
            <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_USER" class="badge bg-primary"><i class="fas fa-plus-circle"></i> Entri User / WS</a>
            <?PHP } ?>
        <!--  -->
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        DATA ENTRI #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <!--  -->
        <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_DIS" class="badge bg-primary"> <i class="fas fa-plus-circle"></i> ENTRI DISPOSISI</a>
        <br>
        <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN02_DIS" class="badge bg-primary"> <i class="fas fa-plus-circle"></i> UPLOAD DISPOSISI</a>
        <br>
        <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_INVEN" class="badge bg-primary"> <i class="fas fa-plus-circle"></i> ENTRI INVEN-RENT</a>
        <br>
        <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_PEMRUANG" class="badge bg-primary"> <i class="fas fa-plus-circle"></i> ENTRI Pem.RUANG</a>
       <!--  -->
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        DATA VIEW #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!--  -->
        <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_USER" class="badge bg-primary"><i class="fas fa-file-alt"></i> View User</a>
        <br>
        <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_DIS" class="badge bg-primary"><i class="fas fa-file-alt"></i> View Disposisi</a>
        <br>
        <a href="?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_VIEW_INVEN" class="badge bg-primary"><i class="fas fa-file-alt"></i> View Inven-Rent</a>
        <!--  -->
      </div>
    </div>
  </div>
</div>
<?PHP }else{ echo"<b>TIDAK MEMILIKI AKSES</b>"; } ?>