<?php
function random_str(
    int $length = 64,
    string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}
$a = random_str(32);
$b = random_str(8, 'abcdefghijklmnopqrstuvwxyz');
$c = random_str();
?>
<form method="POST" id="formAdd">
    <table>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="Nama" id="Nama" required="" />
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <label>
                    <input type="radio" name="jeniskelamin" id="JenisKelamin" value="Laki-laki" required="" />Laki-laki</label>
                <label>
                    <input type="radio" name="jeniskelamin" id="JenisKelamin" value="Perempuan" required="" />Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
            <select name="status" id="status" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="Active">Active</option>
                    <option value="Suspend">Suspend</option>
                    <option value="Banned">Banned</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Type</td>
            <td>
                <select name="type" id="type" required="">
                    <option disabled="" selected="">-Pilih-</option>
                    <option value="Admin">Admin</option>
                    <option value="Moderator">Moderator</option>
                    <option value="User">User</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>
                <input type="text" name="phone" id="NoHP" required="" />
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" id="Email" required="" />
            </td>
        </tr>
        <tr>
            <td>IDNum</td>
            <td>
                <input type="number" name="idnum" id="idnum" value="<?=$b = random_str(13, '1234567890');?>" required="" readonly />
            </td>
        </tr>
        <tr>
            <td>Secure Path</td>
            <td>
                <input type="text" name="securepath" id="securepath" value="<?=$a = random_str(32);?>" required="" readonly />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" id="simpan" value="Simpan" />
                <button id="cancelButton" type="button">Batal</button>
            </td>
        </tr>
    </table>
</form>