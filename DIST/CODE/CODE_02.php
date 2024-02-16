<?php
           
    /*-------------------------------------------------------*/
    /* Himpunan Data Code Variabel DAN FUNGSI  QUERING DBMS */
    /*-----------------------------------------------------*/

                 

        //--GET VIEW--//
           
			
                   
        //--GET DML--//
                //-CAPCHA-//
                    #CAPCHA PERHITUNGAN MADANI
                    $pl_vqa01_sw = $CL_Q($CONN01,"$CL_SL tqa order by RAND()");
                        $pl_vqa01_sww = $CL_FAS($pl_vqa01_sw);
                
?>