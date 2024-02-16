<b>DATAVIEW USER</b>

<table class="table table-sm table-bordered table-striped">
<tr class="table-dark">
    <td width="15%">IDUSER</td>
    <td>NamaUser</td>
    <td>Password</td>
    <td>Aksi</td>
</tr>
<?PHP 
    $dis_vuser01_sw = $CL_Q($CONN01,"$CL_SL srv_user_01 order by user_nama_01 desc ");
    while($dis_vuser01_sww = $CL_FAS($dis_vuser01_sw)){
?>
<tr>
    <td><?PHP echo $dis_vuser01_sww['user_kode_01'] ?></td>
    <td><?PHP echo $dis_vuser01_sww['user_nama_01'] ?></td>
    <td><?PHP echo $dis_vuser01_sww['user_pass_01'] ?></td>
    <td>
        <a href="<?PHP echo"?PG_SA=PL_MD_01&PG_SA_SUB=PL_MD_01_IN_USER&IDUSR01=$dis_vuser01_sww[idmain_user_01]&UPUSR01=UPUSR01"; ?>" class="badge bg-warning">Update</a>
    </td>
</tr>
<?PHP } ?>
</table>