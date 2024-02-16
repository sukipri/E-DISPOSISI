<b>DAFTAR INVENTARIS RENT</b>
<hr>
<?PHP 
    $pl_inven_vflag01_sw = $CL_Q($CONN01,"$SL idmain_flag_01,flag_nama_01 FROM srv_flag_01 WHERE flag_jenis_01='INVEN'");
    while($pl_inven_vflag01_sww = $CL_FAS($pl_inven_vflag01_sw)){
?>
<a href="#" class="btn btn-info btn-sm"><?PHP echo $pl_inven_vflag01_sww['flag_nama_01'] ?></a>
<table class="table table-sm table-bordered table-striped">
    <tr class="table-dark">
        <td>BARANG</td>
        <td>QTY</td>
        <td>QTY > Pinjam</td>
    </tr>
    <?PHP 
        $pl_ls_vinven01_sw = $CL_Q($CONN01,"$CL_SL srv_inven_01 WHERE idmain_flag_01='$pl_inven_vflag01_sww[idmain_flag_01]'");
        while($pl_ls_vinven01_sww = $CL_FAS($pl_ls_vinven01_sw)){
    ?>
    <tr>
        <td><?PHP echo "<a href='?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_INVEN&IDINVEN01=$pl_ls_vinven01_sww[idmain_inven_01]&UPINVEN01=UPINVEN01'>".$pl_ls_vinven01_sww['inven_ket_01']."</a>"; ?></td>
        <td><?PHP echo $pl_ls_vinven01_sww['inven_jml_01'] ?></td>
        <td>QTY > Pinjam</td>
    </tr>
    <?PHP } ?>
</table>
<?PHP } ?>