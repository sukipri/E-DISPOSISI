<?PHP #if($hr_vusr01_sww['user_hak_01']=="1"){ ?>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       DisApp #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <!--  -->
         <a href="?PG_SA=PL_APP_01&PG_SA_SUB=PL_APP_01_VIEW_DISAPP" class="badge bg-primary"><i class="fas fa-plus-circle"></i> INBOX</a>
         <br>
         <a href="?PG_SA=PL_APP_01&PG_SA_SUB=PL_APP_01_IN_DISAPPNOTULEN" class="badge bg-primary"><i class="fas fa-plus-circle"></i> NOTULEN</a>
        <!--  -->
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        DATA DISPOSISI #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <!--  -->
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
        <!--  -->
      </div>
    </div>
  </div>
</div>
<?PHP #}else{ echo"<b>TIDAK MEMILIKI AKSES</b>"; } ?>