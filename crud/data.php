<button id="addButton" class="btn btn-primary">Tambah Data</button>
<br>
<br>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Email</th>
            <th>Type</th>
            <th>Status</th>
            <th>No. HP</th>
            <th>ID Number</th>
            <th>Ratings</th>
            <th>Secure Path</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
   include "../func/koneksi.php";
   $no=1;
   $query=mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC") or die(mysqli_error($koneksi));
   while ($result=mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['username']; ?>
                </td>
                <td>
                    <?php echo $result['email']; ?>
                </td>
                <td>
                    <?php echo $result['type']; ?>
                </td>
                <td>
                    <?php echo $result['status']; ?>
                </td>
                <td>
                    <?php echo $result['phone']; ?>
                </td>
                <td>
                    <?php echo $result['idnum']; ?>
                </td>
                <td>
                    <?php echo $result['ratings']; ?>
                </td>
                <td>
                    <?php echo $result['securepath']; ?>
                </td>
                <td>
                    <button id="EditButton" value="<?php echo $result['id']; ?>">Edit</button>
                    <button id="DeleteButton" value="<?php echo $result['id']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
    </tbody>
</table>