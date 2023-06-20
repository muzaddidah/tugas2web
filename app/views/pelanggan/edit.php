<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
<input type="hidden" name="pel_id" value="<?php echo $data['row']['pel_id'];?>">
    <table>
        <tr>
            <td>NO PELANGGAN</td>
            <td><input type="text" name="pel_no" value="<?php echo $data['row']['pel_no'];?>"></td>
        </tr>
        <tr>
            <td>NAMA PELANGGAN</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['row']['pel_nama'];?>"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['row']['pel_alamat'];?>"></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp'];?>"></td>
        </tr>
        <tr>
            <td>NO KTP</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp'];?>"></td>
        </tr>
        <tr>
            <td>SERI PELANGGAN</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri'];?>"></td>
        </tr>
        <tr>
            <td>NO METERAN</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran'];?>"></td>
        </tr>
        <tr>
            <td>PELANGGAN AKTIF</td>
            <td><input type="text" name="pel_aktif" value="<?php echo $data['row']['pel_aktif'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>