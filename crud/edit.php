<?php
 include "../func/koneksi.php";
 $id=$_GET['id'];
 $query=mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="hidden" name="id" id="id" required="" value="<?php echo $result['id']; ?>" />
                    <input type="text" name="username" id="Nama" required="" value="<?php echo $result['username']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <label>
                        <input type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" required="" <?php if($result[ 'jeniskelamin']=="Laki-laki" ) echo "checked"; ?> />Laki-laki</label>
                    <label>
                        <input type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan" required="" <?php if($result[ 'jeniskelamin']=="Perempuan" ) echo "checked"; ?> />Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                <select name="status" id="status" required="">
                        <option disabled="" selected="">-Pilih-</option>
                        <option value="Active" <?php if($result[ 'status']=="Active" ) echo "selected"; ?>>Active</option>
                        <option value="Suspend" <?php if($result[ 'status']=="Suspend" ) echo "selected"; ?>>Suspend</option>
                        <option value="Banned" <?php if($result[ 'status']=="Banned" ) echo "selected"; ?>>Banned</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>type</td>
                <td>
                    <select name="type" id="type" required="">
                        <option disabled="" selected="">-Pilih-</option>
                        <option value="Admin" <?php if($result[ 'type']=="Admin" ) echo "selected"; ?>>Admin</option>
                        <option value="Moderator" <?php if($result[ 'type']=="Moderator" ) echo "selected"; ?>>Moderator</option>
                        <option value="User" <?php if($result[ 'type']=="User" ) echo "selected"; ?>>User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>
                    <input type="text" name="phone" id="NoHP" required="" value="<?php echo $result['phone']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" id="Email" required="" value="<?php echo $result['email']; ?>" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Simpan" />
                    <button type="button" id="cancelButton">Batal</button>
                </td>
            </tr>
        </table>
    </form>